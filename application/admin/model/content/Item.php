<?php

namespace app\admin\model\content;

use think\Model;


class Item extends Model
{

    

    

    // 表名
    protected $name = 'item';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'starttime_text',
        'typedata_text'
    ];
    

    
    public function getTypedataList()
    {
        return ['每日返息 到期还本' => __('每日返息 到期还本'), '每周返息 到期还本' => __('每周返息 到期还本'), '每月返息 到期还本' => __('每月返息 到期还本'), '每日复利 保本保息' => __('每日复利 保本保息'), '到期还本还息' => __('到期还本还息'), '每小时返息 到期还本' => __('每小时返息 到期还本')];
    }


    public function getStarttimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['starttime']) ? $data['starttime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getTypedataTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['typedata']) ? $data['typedata'] : '');
        $list = $this->getTypedataList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    protected function setStarttimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
