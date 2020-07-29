<?php

namespace app\mobile\controller;

use app\common\controller\Frontend;
use think\Db;
class About extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index(){
        $data=Db::name('article')->where('category_id','16')
        ->where('switch','1')->order('weigh desc')
        ->field('id,title')
        ->select();
        return $this->view->fetch('',compact('data'));
    }
    public function details(){
        $id = $this->request->param('id');
        $article = Db::name('article')->where('id',$id)->find();
        //dump($article);die;
        return $this->view->fetch('', compact('article'));
    }
}