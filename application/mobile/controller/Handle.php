<?php

namespace app\mobile\controller;

use app\common\model\User;
use think\Db;
use think\Controller;

class Handle extends Controller
{
    public function jiesuan()
    {
        header('Content-type:text/html; charset=utf-8');
        $time = time();






        echo $time . '<hr/>';
        // $list = getData('invest_list', 'all', 'time1 <= \'' . $time . '\' AND status = 0', '0,1');
        $list=Db::name('invest_list')->where('plantime','elt',$time)
        ->where('status','0')->limit(100)->select();
        
        if (!empty($list)) {
            foreach ($list as $l) {
                $id = $l['id'];
                $money = $l['pay1'];
                $money1 = $l['money1'];
                $title = $l['title'];
                $num = $l['num'];
                $uid = $l['uid'];
                $data = array('handletime' => $time, 'pay2' => $money, 'status' => 1);
                echo $uid . ' ' . $title . ' 第' . $num . '期到账' . $money . '元！<br/>';
                if (Db::name('invest_list')->where('id',$id)->update($data)) {
                    if (0 < $money) {
                        User::money($money,$uid, $title . ' 第' . $num . '期收益' . $money . '元');
                        // addFinance($uid, $money, $title . ' 第' . $num . '期收益' . $money . '元', 1, getUserField($uid, 'money'));
                        // setNumber('user', 'money', $money, 1, 'id=\'' . $uid . '\'');
                        // setNumber('user', 'income', $money1, 1, 'id=\'' . $uid . '\'');
                        // sendSms(getUserPhone($uid), '18003', $money);
                    }
                }
                // if (editData('invest_list', $data, 'id=\'' . $id . '\'')) {
                //     if (0 < $money) {
                //         addFinance($uid, $money, $title . ' 第' . $num . '期收益' . $money . '元', 1, getUserField($uid, 'money'));
                //         setNumber('user', 'money', $money, 1, 'id=\'' . $uid . '\'');
                //         setNumber('user', 'income', $money1, 1, 'id=\'' . $uid . '\'');
                //         // sendSms(getUserPhone($uid), '18003', $money);
                //     }
                // }
            }
        }


        // $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
        // echo '<script type="text/javascript">
        //     setInterval(refresh,1000)
        //     function refresh(){
        //         window.location.href = "' . $url . '";
        //     }
        // </script>';
    }

    public function smsrand()
    {
        $rand = rand(1000, 9999);
        session('code', $rand);
        // $_SESSION['smsRandCode'] = $rand;
        echo $rand;
        die;
    }
}
