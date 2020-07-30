<?php

namespace app\mobile\controller;


use think\Controller;

class Handle extends Controller{
    public function smsrand()
    {
        $rand = rand(1000, 9999);
        session('code',$rand);
        // $_SESSION['smsRandCode'] = $rand;
        echo $rand;die;
    }
}