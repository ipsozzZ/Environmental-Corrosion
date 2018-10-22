<?php
namespace app\mobile\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this -> assign("pageTitle", "首页");
        return view();
    }
    public function user () {
        $this -> assign("pageTitle", "用户");
        return view('index');
    }
}