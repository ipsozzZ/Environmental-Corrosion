<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "栏目");
    }

    public function index(){
        $Cate = db('cate') -> select();
        $this -> assign('category', $Cate);
        return view();
    }
}