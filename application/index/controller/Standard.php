<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Standard extends Common
{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 标准规范
   */
  public function index(){
    $this -> assign('currTitle','标准规范');
    return view();
  }
}