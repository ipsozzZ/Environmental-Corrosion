<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Outdoor extends Common
{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 室外数据
   */
  public function index(){
    $this -> assign('currTitle','室外数据');
    return view();
  }

   /**
   * 显示数据
   */
  public function dataShow(){
    $this -> assign('currTitle','St12琼海96');
    return view('dataShow');
  }
}