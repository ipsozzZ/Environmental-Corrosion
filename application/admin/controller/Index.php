<?php
namespace app\admin\controller;

use think\Controller;


class Index extends Controller
{
    public function  _initialize () {
        $this -> assign("pageTitle", "首页");
    }
    public function index()
    {
        return view();
    }
}


