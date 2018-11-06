<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Personal extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 个人信息
   */
  public function index()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }

  /**
   * 个人收藏 
   */
  public function collection()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }

  /**
   * 个人下载
   */
  public function download()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }

  /**
   * 消息中心
   */
  public function news()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }
}