<?php
namespace app\mobile\controller;
use think\Controller;

class Plan extends Controller
{
    public function index()
    {
        $this -> assign("pageTitle", "学习计划");
        $this -> assign('curPageIndex', 3);
        return view();
    }
}