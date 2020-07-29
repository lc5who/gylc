<?php


namespace app\admin\controller;


use app\admin\model\finance\Cash;
use app\common\controller\Backend;
use app\admin\model\finance\Recharge;
class Handle extends Backend
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];
    protected $layout = '';

    public function checkWarn()
    {
        Recharge::where('warn',0)->count()>0||Cash::where('warn',0)->count()>0
            ?$this->success('success'):$this->error('fail');
    }
}