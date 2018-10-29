<?php
namespace app\mobile\controller;
use think\Controller;

class Plan extends Controller
{
    public function _initialize()
    {
        $this -> assign('pageTitle', '学习计划');
        $this -> assign('curPageIndex', 3);
        $this -> assign('notShowFooter', false); // 显示footer
        $this -> assign('isEdit', false);
    }

    public function index()
    {
        return view();
    }

    public function edit() {
        $this -> assign('isEdit', true);
        return view("index");
    }
}