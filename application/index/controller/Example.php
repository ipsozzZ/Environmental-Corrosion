<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Example extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 应用案例
   */
  public function index()
  {
    $this->assign('currTitle', '应用案例');
    return view();
  }

  /**
   * 重大案例
   */
  public function majorCase()
  {
    $this->assign('currTitle', '重大案例');
    return view('majorCase');
  }

  /**
   * 专题服务
   */
  public function special()
  {
    $this->assign('currTitle', '专题服务');
    return view();
  }
}