<?php
namespace app\mobile\controller;
use think\Controller;

class Train extends Controller
{
    public function index()
    {
        $this -> assign("pageTitle", "训练营");
        $this -> assign('curPageIndex', 2);
        $this -> assign('notShowFooter', false); // 显示footer
        return view();
    }
}