<?php

namespace app\mobile\controller;

use think\Db;
use app\common\controller\Frontend;
use app\common\model\User as UserModel;

class Mobile extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function giftdetail()
    {
        $id=input('id','1');
        $data=Db::name('gift')->where('id',$id)->find();
        if(!$data){
            msg('不存在的礼物', 2, url('mobile/box1'));
        }
        if($this->request->isPost()){
           if(!$this->auth->isLogin()) {
               msg('请先登陆',2,url('user/login'));
           }
           
           
        }
        return $this->view->fetch('',compact('data'));
    }
    public function calculator(){
        return $this->view->fetch();
    }
    public function reward(){
        $id=$this->request->param('id');
        $isCheck = Db::name('user_check')->where('uid', $this->auth->id)
        ->where('createtime', 'egt', strtotime(date('Y-m-d 00:00:00')))
        ->count() > 0 ? 1 : 0;
        $task2= Db::name('invest')->where('uid', $this->auth->id)
        ->sum('money')>1000?1:0;
        $task3 = Db::name('invest')->where('uid', $this->auth->id)
        ->count()> 1 ? 1 : 0;
        
        $qdmoney=config('site.qdmoney');
        $qdguoshi=config('site.qdguoshi');
        switch ($id) {
            case '1':
                if($isCheck==1){
                    $this->error('你今日已领取过');
                }
                Db::name('user_check')->insert([
                    'uid'=>$this->auth->id,
                    'createtime'=>time()
                ]);
                UserModel::money($qdmoney,$this->auth->id,'每日登陆奖励余额');
                UserModel::guoshi($qdguoshi, $this->auth->id, '每日登陆奖励果实');
                $this->success("领取成功奖励余额{$qdmoney}果实". $qdguoshi);
                break;
            case '2';
                if(Db::name('user_task')->where('uid', $this->auth->id)->where('tid','2')
                ->count()>0){
                    $this->error('您已经领取过该任务奖励');
                }
            default:
                # code...
                break;
        }
    }
    public function task(){

        $isCheck=Db::name('user_check')->where('uid',$this->auth->id)
        ->where('createtime','egt',strtotime(date('Y-m-d 00:00:00')))
        ->count()>0?1:0;
        $this->view->assign('isCheck',$isCheck);
        return $this->view->fetch();
    }
    public function index()
    {
        $item=Db::name('item')->where('percent','lt','100')->order('sort desc')->select();
        $banner=Db::name('banner')->where('category_id','14')
        ->where('switch','1')->order('weigh desc')->select();
        return $this->view->fetch('',compact('item','banner'));
    }
    public function form(){
        if(!$this->auth->isLogin()){
            msg('请先登陆',2,url('user/login'));
        }
        $id = $this->request->param('id');
        $item = Db::name('item')->where('id', $id)->find();
        if(!$item){
            msg('非法项目',2,url('mobile/index'));
        }
        if($this->request->isPost()){
            $data = $this->request->param();
            $vali = $this->validate($data, [
                'pwd' => 'require',
                'money' => 'require',
                'id' => 'require',
            ], [
                'pwd.require' => '请填写交易密码',
                'money.require' => '请填写投资金额',
                'id.require' => '非法项目',
            ]);
            if ($vali !== true) {
                msg($vali, 2, url('mobile/index'));
            }
            if($data['pwd']!=$this->auth->paypassword){
                msg('交易密码错误');
            }
            if($data['money']<$item['min']){
                msg('最少投资金额为'. $item['min']);
            }
            if ($data['money'] > $item['max']) {
                msg('最大投资金额为' . $item['min']);
            }
            if ($data['money'] > $this->auth->money) {
                msg('用户余额不足,请充值',2,url('user/recharge'));
            }
            $tzcount= Db::name('invest')->where('uid',$this->auth->id)
            ->where('pid',$item['id'])->count();
            if($tzcount == $item['num']){
                msg('投资次数已达'.$item['num'].'次');
            }
            $bool=true;
            Db::startTrans();
            try{
                $invest=[
                    'uid'=>$this->auth->id,
                    'pid'=>$item['id'],
                    'title'=>$item['title'],
                    'money'=>$data['money'],
                    'day'=>$item['day'],
                    'rate'=>$item['rate'],
                    'type1'=>'0',
                    'type2'=>$item['typedata'],
                    'status'=>0,
                    'createtime'=>time()
                ];
                $iid=Db::name('invest')->insertGetId($invest);
                $investlist=[];
                for ($i=0; $i < $item['day']; $i++) {
                    $investlist[]=[
                        'uid'=>$this->auth->id,
                        'iid'=>$iid,
                        'num'=>$item['day'],
                        'title'=>$item['title'],
                        'money1'=>$item['rate']*$data['money']/100,
                        'money2'=>0,
                        'plantime'=>time()+($i+1)*60*60*24,
                        'handletime'=>0,
                        'pay1'=>$item['rate']*$data['money']/100,
                        'pay2'=>'0.00',
                        'status'=>0
                    ];
                }

                $investlist[count($investlist)-1]['money2']=$data['money'];

            $investlist[count($investlist) - 1]['pay1'] = $investlist[count($investlist) - 1]['money1']+ $investlist[count($investlist) - 1]['money2'];
                Db::name('invest_list')->insertAll($investlist);
                // User::money(-$data['money'],$this->auth->id,'投资');
                
                Db::name('user_money_log')->insert([
                    'user_id'=>$this->auth->id,
                    'money'=>-$data['money'],
                    'before'=>$this->auth->money,
                    'after'=> $this->auth->money-$data['money'],
                    'memo'=>"投资项目{$item['title']} {$data['money']}元",
                    'createtime'=>time()
                ]);
                Db::name('user')->where('id', $this->auth->id)
                ->setDec('money', $data['money']);

                //奖励果实 积分
                Db::name('user')->where('id',$this->auth->id)
                ->setInc('guoshi',$data['money']*$item['zsgs']);
                // Db::name('score')->where('id', $this->auth->id)
                // ->setInc('score', $data['money'] * $item['zsczz']);



                Db::commit();
                //分润
                }
                catch(\Exception $e){
                    $bool=false;
                    Db::rollback();
                }
            
            if($bool){
                //赠送积分
                $zsjf= $data['money'] * $item['zsczz'];
                UserModel::score($zsjf,$this->auth->id,"投资{$data['money']}元赠送成长值". $zsjf);
                if ($this->auth->top != 0) {
                    $topUser = UserModel::where('id', $this->auth->top)->find();
                    $frmoney = round($item['frbl'] * $data['money'] / 100, 2);
                    UserModel::money($frmoney, $topUser['id'], '推荐会员投资' . $data['money'] . '元奖励' . $frmoney . '元！');
                }
                msg('投资成功!',2,url('user/person'));
            }
            msg('投资失败');
        }
        return $this->view->fetch('',compact('item'));
    }
    public function details(){
        $id=$this->request->param('id');
        $item=Db::name('item')->where('id',$id)->find();
        return $this->view->fetch('',compact('item'));
    }
    public function box1(){
        return $this->view->fetch(); 
    }
    public function box(){
        return $this->view->fetch(); 
    }
    public function wheel()
    {
        return $this->view->fetch();
    }
    public function sp()
    {
        $islogin=0;
        $jscs=0;
        if($this->auth->isLogin()){
            $islogin=1;
            $jscs=Db::name('jiaoshui')->where('username',$this->auth->username)
            ->count();
        }
        $gyhl=Db::name('banner')->where('category_id',18)->order('weigh desc')
        ->select();
        return $this->view->fetch('',compact('islogin','jscs','gyhl'));
    }
    public function giftlist(){
        $data=Db::name('gift')->order('weigh desc')->select();
        return $this->view->fetch('',compact('data'));
    }
    public function qiandaonew(){
        return $this->view->fetch();
    }
    public function login()
    {
       if($this->request->isPost()){
        $data=$this->request->param();
        $vali=$this->validate($data,[
            'account'=>'require',
            'password'=>'require',
        ],[
            'account.require'=>'请填写用户名',
            'password.require'=>'请填写密码',
        ]);
        if($vali!==true){
            msg($vali,2,url('mobile/login'));
        }
        if(!$this->auth->login($data['account'],$data['password'])){
            msg($this->auth->getError(), 2, url('mobile/login'));
        }
            msg('登陆成功', 2, url('mobile/index'));
       }else{
         return $this->view->fetch();
       }
    }
    public function reg()
    {
       if($this->request->isPost()){

       }else{
         return $this->view->fetch();
       }
    }
}
