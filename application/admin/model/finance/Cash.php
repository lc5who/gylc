<?php

namespace app\admin\model\finance;

use app\common\model\User;
use think\Model;


class Cash extends Model
{

    

    

    // 表名
    protected $name = 'cash';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'status_text',
        'handletime_text'
    ];
    public function rejectCash($id){
        $data = self::get($id);
        if ($data) {
            User::money($data['money'], $data['uid'], '用户提现失败,返回余额');
            $data->save(['warn' => 1,'status' => '2','handletime'=>time()]);
            return true;
        }
        return  false;
    }
    public function doCash($id)
    {
        $data=self::get($id);
        if($data){
            // User::money(-$data['money'],$data['uid'],'用户提现');
            $data->save(['warn'=>1,'status'=>'1', 'handletime' => time()]);
            return true;
        }
        return  false;
    }
    public function ignoreAll()
    {
        $res=self::where('warn',0)->update(['warn'=>1]);
        return $res;
    }
    
    public function getStatusList()
    {
        return ['0' => __('Status 0'), '1' => __('Status 1'), '2' => __('Status 2')];
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getHandletimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['handletime']) ? $data['handletime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    protected function setHandletimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
