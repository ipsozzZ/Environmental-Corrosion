<?php

namespace app\admin\controller;

use think\Controller;

class Lesson extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "课程管理");
    }

    public function index(){
        $Lesson =  db('lesson') -> select();
        $this   -> assign('Lesson',$Lesson);
        return view();
    }
}