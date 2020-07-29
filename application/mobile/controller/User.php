<?php

namespace app\mobile\controller;

use app\admin\model\finance\Cash;
use think\Db;
use think\Hook;
use think\Cookie;
use app\admin\model\user\Bankcard;
use app\common\controller\Frontend;
use app\admin\model\finance\Recharge;
use app\admin\model\user\Giftorder;
use app\common\model\User as ModelUser;

class User extends Frontend
{

    protected $noNeedLogin = ['login','register'];
    protected $noNeedRight = '*';
    protected $layout = '';
    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
        //监听注册登录注销的事件
        Hook::add('user_login_successed', function ($user) use ($auth) {
            $expire = input('post.keeplogin') ? 30 * 86400 : 0;
            Cookie::set('uid', $user->id, $expire);
            Cookie::set('token', $auth->getToken(), $expire);
        });
        Hook::add('user_register_successed', function ($user) use ($auth) {
            Cookie::set('uid', $user->id);
            Cookie::set('token', $auth->getToken());
        });
        Hook::add('user_delete_successed', function ($user) use ($auth) {
            Cookie::delete('uid');
            Cookie::delete('token');
        });
        Hook::add('user_logout_successed', function ($user) use ($auth) {
            Cookie::delete('uid');
            Cookie::delete('token');
        });
    }
    public function prize(){
        $data=$this->request->param();
        $doprize= config('site.doprize');
        if($this->auth->guoshi< $doprize){
            $this->error('您的果实不足');
        }
        $this->auth->getUser()->setDec('guoshi', $doprize);
        $this->success('抽奖完成');
        
    }
    public function watering(){
        $ts=strtotime(date('Y-m-d 00:00:00'));
        $res=Db::name('jiaoshui')->where('username',$this->auth->username)
        ->where('createtime','gt',$ts)->find();
        if($res){
            $this->error('您今日已浇过水了');
        }
        Db::name('jiaoshui')->insert([
            'username'=>$this->auth->username,
            'createtime'=>time(),
        ]);
        $this->success('浇水成功');
    }
    public function getgift(){
        $id=$this->request->param('id');
        $gift=Db::name('gift')->where('id',$id)->find();
        if(!$gift){
            $this->error('非法礼物');
        }
        if($gift['price']>$this->auth->guoshi){
            $this->error('果实不足');
        }
        $dhcs=Db::name('giftorder')->where('username',$this->auth->username)
        ->where('gid',$id)
        ->count();
        if($gift['maxchange']<=$dhcs){
            $this->error('最大兑换次数'. $gift['maxchange']);
        }
        $this->auth->getUser()->setDec('guoshi',$gift['price']);
        $giftOrder=[
            'username'=>$this->auth->username,
            'gid'=>$gift['id'],
            'title'=>$gift['title'],
            'status'=>'进行中',
            'createtime'=>time()
        ];
        Db::name('giftorder')->insert($giftOrder);
        $this->success('兑换成功,实物可联系客服发货');
    }
    public function cash(){
        $bank = Db::name('user_bankcard')->where('user_id', $this->auth->id)
        ->select();
        if ($this->auth->auth != 1) {
            msg('请先完成实名认证', 2, url('user/certification'));
        }
        if(!$bank){
            msg('请先绑定银行卡', 2, url('user/add_card'));
        }
        // if ($this->auth->auth != 1) {
        //     msg('请先完成实名认证', 2, url('user/certification'));
        // }
        if($this->request->isPost()){
            
            $data = $this->request->post();
            $res = $this->validate($data, [
                'money' => 'require',
                'pwd' => 'require',
                'bank'=>'require',
            ], [
                'money.require' => '请填写提现金额',
                'pwd.require' => '请填写交易密码',
                'bank.require' => '请选择提现银行卡',
            ]);
            if ($res !== true) {
                msg($res);
            }
            $mincash= config('site.mincash');
            if($data['money']< $mincash){
                msg('最小提现金额为'.$mincash);
            }
            if($data['pwd']!=$this->auth->paypassword){
                msg('交易密码不正确');
            }
            if($data['money']>$this->auth->money){
                msg('提现金额大于账户余额');
            }
            $txbank=Db::name('user_bankcard')->where('id',$data['bank'])
            ->where('user_id',$this->auth->id)->find();
            if(!$txbank){
                msg('不存在的银行卡');
            }
            $txres=Cash::create([
                'uid'=>$this->auth->id,
                'name'=>$this->auth->idname,
                'bid'=>$txbank['id'],
                'bank'=>$txbank['bankname'],
                'account'=>$txbank['bankcard'],
                'money'=>$data['money'],
                'status'=>0,
                'warn'=>0
            ]);
            ModelUser::money(-$data['money'],$this->auth->id,'用户提现');
            msg('提现申请成功！',2,url('user/person'));
        }
        return $this->view->fetch('',compact('bank'));
    }
    public function invest(){
        $data = Db::name('invest')->where('uid', $this->auth->id)
        ->select();
        return $this->view->fetch('', compact('data'));
    }
    public function interest(){
        $data = Db::name('invest_list')->where('uid', $this->auth->id)
        ->select();
        return $this->view->fetch('', compact('data'));
    }
    public function tuiguang(){
        $data=ModelUser::where('top',$this->auth->id)->select();
        return $this->view->fetch('',compact('data'));
    }
    public function gift(){
        $data=Giftorder::where('username',$this->auth->username)->select();
        return $this->view->fetch('',compact('data'));
    }
    public function pwd_pay()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $res = $this->validate($data, [
                'oldpwd' => 'require',
                'pwd' => 'require',
            ], [
                'oldpwd.require' => '请填写旧密码',
                'pwd.require' => '请填写新密码',
            ]);
            if ($res !== true) {
                msg($res);
            }
            $this->auth->changepaypwd($data['pwd'], '', true) ?
                msg('修改成功', 2, url('user/set_account'))
                : msg('修改失败,请检查原密码');
        }
        return $this->view->fetch();
    }
    public function pwd_login()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $res = $this->validate($data, [
                'oldpwd' => 'require',
                'pwd' => 'require',
            ], [
                'oldpwd.require' => '请填写旧密码',
                'pwd.require' => '请填写新密码',
            ]);
            if ($res !== true) {
                msg($res);
            }
            $this->auth->changepwd($data['pwd'], '', true) ?
                msg('修改成功', 2, url('user/login'))
                : msg('修改失败,请检查原密码');
        }
        return $this->view->fetch();
    }
    public function set_account()
    {

        return $this->view->fetch();
    }
    public function add_card()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $res = $this->validate($data, [
                'bank' => 'require',
                'account' => 'require'
            ], [
                'bank.require' => '请填写银行名称',
                'account.require' => '请填写银行卡号',
            ]);
            if ($res !== true) {
                msg($res);
            }
            Bankcard::create([
                'user_id' => $this->auth->id,
                'bankname' => $data['bank'],
                'bankcard' => $data['account']
            ]);
            msg('添加成功');
        }
        $bank = Bankcard::where('user_id', $this->auth->id)->select();
        $this->view->assign('bank', $bank);
        // dump($bank);die;
        return $this->view->fetch('');
    }
    public function del_card()
    {
        $id = $this->request->param('id');
        $res = Bankcard::where('id', $id)->delete();
        if ($res) {
            msg('删除成功', 2, url('user/add_card'));
        } else {
            msg('删除失败', 2, url('user/add_card'));
        }
    }
    public function certification(){
        if($this->request->isPost()){
            $data=$this->request->param();
            $vali=$this->validate($data,[
                'name'=>'require',
                'idcard' => 'require',
            ],[
                'name.require'=>'请填写真实姓名',
                'idcard.require' => '请填写身份正好',
            ]);
            if($vali!==true){
                msg($vali,2,url('user/certification'));
            }
            if(!authCheck($data['name'],$data['idcard'])){
                msg('不匹配的身份证信息', 2, url('user/certification'));
            }
            $this->auth->getUser()->save([
                'auth'=>1,
                'idname'=>$data['name'],
                'idcard'=>$data['idcard']
            ]);
            msg('认证成功', 2, url('user/certification'));
        }else{
            return $this->view->fetch();
        }
    }
    public function fund(){
        $data = Db::name('user_money_log')->where('user_id', $this->auth->id)
            ->select();
        return $this->view->fetch('', compact('data'));
    }
    public function logout(){
        $this->auth->logout();
        msg('退出成功',2,url('mobile/box'));
    }
    public function login()
    {
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $vali = $this->validate($data, [
                'account' => 'require',
                'password' => 'require',
            ], [
                'account.require' => '请填写用户名',
                'password.require' => '请填写密码',
            ]);
            if ($vali !== true) {
                msg($vali, 2, url('mobile/login'));
            }
            if (!$this->auth->login($data['account'], $data['password'])) {
                msg('账号或密码错误', 2, url('mobile/login'));
            }
            msg('登陆成功', 2, url('mobile/index'));
        } else {
            return $this->view->fetch();
        }
    }
    public function record_value(){
        $data=Db::name('user_score_log')->where('user_id',$this->auth->id)
        ->select();
        return $this->view->fetch('',compact('data'));
    }
    public function person(){
        // if($this->auth->isLogin()){
        //     $this->redirect('user/login');
        // }
        $dsfh=Db::name('invest_list')->where('uid',$this->auth->id)
        ->where('status','0')->sum('money1');
        $dsbj = Db::name('invest_list')->where('uid', $this->auth->id)
        ->where('status', '0')->sum('money2');
        $lcsy=Db::name('user_money_log')->where('user_id', $this->auth->id)
        ->where('memo','like',"%'投资还款'%")->sum('money');
        $yqsy = Db::name('user_money_log')->where('user_id', $this->auth->id)
        ->where('memo', 'like', "%'邀请会员投资'%")->sum('money');
        return $this->view->fetch('',compact('dsfh','dsbj','lcsy','yqsy'));
    }
    public function recommend(){
        $data=ModelUser::where('top',$this->auth->id)
        ->field('username,createtime')
        ->select();
        return $this->view->fetch('',compact('data'));
    }
    public function scan(){
        $data = $this->request->param();
        $vali = $this->validate($data, [
            'type' => 'require',
            'money' => 'require'
        ], [
            'type.require' => '请选择充值渠道',
            'money.require' => '请正确填写充值金额',
        ]);
        if ($vali !== true) {
            msg($vali, 2, url('user/recharge'));
        }
        $payinfo = Db::name('payinfob')->where('name', $data['type'])
            ->where('switch', '1')
            ->find();
        if (!$payinfo) {
            msg('该入款渠道已关闭', 2, url('user/recharge'));
        }
        $this->view->assign('payinfo', $payinfo);
        return $this->view->fetch();
    }
    public function bank(){
        $data = $this->request->param();
        $vali = $this->validate($data, [
            'type' => 'require',
            'money' => 'require'
        ], [
            'type.require' => '请选择充值渠道',
            'money.require' => '请正确填写充值金额',
        ]);
        if ($vali !== true) {
            msg($vali, 2, url('user/recharge'));
        }
        $payinfo = Db::name('payinfob')->where('name', $data['type'])
            ->where('switch','1')
            ->find();
        if (!$payinfo) {
            msg('该入款渠道已关闭', 2, url('user/recharge'));
        }
        $this->view->assign('payinfo', $payinfo);
        return $this->view->fetch();
    }
    public function recharge()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $vali = $this->validate($data, [
                'type' => 'require',
                'money' => 'require'
            ], [
                'type.require' => '请选择充值渠道',
                'money.require' => '请正确填写充值金额',
            ]);
            if ($vali !== true) {
                msg($vali, 2, url('user/recharge'));
            }
            $cat = Db::name('payinfob')->where('name', $data['type'])->where('switch', '1')
                ->find();
            if (!$cat) {
                msg('该入款渠道已关闭', 2, url('user/recharge'));
            }
            $recharge = [
                // 'user_id' => $this->auth->id,
                'user_id' =>0,
                'money' => $data['money'],
                'type' => $cat['title'],
                'orderid' => orderSn(),
                'status' => 0,
                'warn' => 0
            ];
            Recharge::create($recharge);
            if($cat['type']=='bank'){
                $this->redirect(url("user/bank", "type={$cat['name']}&money={$data['money']}"));
                
            }else{
                $this->redirect(url("user/scan", "type={$cat['name']}&money={$data['money']}"));
            }

        }else{
            $data = Db::name('payinfob')->where('switch', '1')
                ->order('weigh desc')->select();
            return $this->view->fetch('', compact('data'));
        }
        
    }
}