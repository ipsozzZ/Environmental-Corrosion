<?php
namespace app\mobile\controller;
use think\Controller;

class Mine extends Controller
{
  public function _initialize()
  {
    $this -> assign('pageTitle', '用户');
    $this -> assign('curPageIndex', 4);
    $this -> assign('showBackBtn', true);
  }

  public function index() {
    return view();
  }

}