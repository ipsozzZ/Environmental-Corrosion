<?php
namespace app\common\controller;

use think\Controller;

class User extends Controller
{
  public function _initialize () {
    $this -> assign('notShowFooter', false); // 显示footer
  }

  public function logout () {
    cookie('disney_token', null);
    return json_encode(1);
  }
}