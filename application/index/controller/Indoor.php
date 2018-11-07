<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Indoor extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 室内数据
   */
  public function index()
  {
    $this->assign('currTitle', '室内数据');
    return view();
  }

  /**
   * 显示内容
   */
  public function show()
  {
    $this->assign('currTitle', '室内数据');
    return view();
  }

  /* 极化测试 */
  public function polarize()
  {
    $this->assign('currTitle', '室内数据');
    return view();
  }

  /**
   * 阻化测试
   */
  public function hindrance()
  {
    $this->assign('currTitle', '室内数据');
    return view();
  }

  /**
   * 开路电位
   */
  public function openPotential()
  {
    $this->assign('currTitle', '室内数据');
    return view('openPotential');
  }

  /**
   * 显示数据
   */
  public function dataShow()
  {
    $this->assign('currTitle', '室内数据');
    return view('dataShow');
  }
}