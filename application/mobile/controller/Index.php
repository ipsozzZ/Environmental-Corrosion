<?php
namespace app\mobile\controller;

use think\Controller;

class Index extends Controller
{
  public function index ()
  {
    $this -> assign("pageTitle", "首页");
    $this -> assign('curPageIndex', 1); //当前页面索引，用来控制footer下面的icon
    return view();
  }
}
