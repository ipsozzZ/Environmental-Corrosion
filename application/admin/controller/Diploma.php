<?php

namespace app\admin\controller;

use think\Controller;

class Diploma extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "用户证书");
    }

    /* 用户证书列表 */
    public function index(){
        $Diploma = db('diploma') -> select();
        $this -> assign("Diploma", $Diploma);
        return view();
    }
}