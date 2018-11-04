<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;

class Basic extends Common
{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 基础数据
   */
  public function index(){
    $this -> assign('currTitle','基础数据');
    return view();
  }
}