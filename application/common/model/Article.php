<?php

namespace app\common\model;

use think\Model;


class Article extends Model
{

    

    

    // 表名
    protected $name = 'article';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];

    public function getListByCat($cat)
    {
        return self::where('category_id',$cat)->where('switch','1')
            ->field('id,title')
            ->order('weigh desc')->select();
    }

    public function getItemById($id)
    {
        return self::where('id',$id)->where('switch',1)->find();
    }
    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    







}
