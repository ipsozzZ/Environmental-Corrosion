<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Index extends Common
{
    public function _initialize(){
        parent::_initialize();
    }

    /**
     * 前台首页
     */
    public function index()
    {
        $this -> assign("currTitle", '首页');
        return view();
    }

    /**
     * 显示详情
     */
    public function show(){
        $this -> assign('currTitle','详情');
        return view();
    }
}
