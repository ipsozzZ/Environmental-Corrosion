<?php
namespace app\mobile\controller;
use think\Controller;

class Mood extends Controller
{
    public function index()
    {
        $this -> assign("pageTitle", "学习心情");
        $this -> assign('notShowFooter', true); // 不显示footer
        $this -> assign('showBackBtn', true); //当前页面是否显示左上角返回按钮
        return view();
    }
}