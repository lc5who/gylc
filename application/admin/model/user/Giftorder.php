<?php

namespace app\admin\model\user;

use think\Model;


class Giftorder extends Model
{

    

    

    // 表名
    protected $name = 'giftorder';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    







}
