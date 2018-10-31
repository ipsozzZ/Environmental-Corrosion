<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\User as Model;

class User extends Controller
{
  public function _initialize () {
    $this -> assign('notShowFooter', false); // 显示footer
  }

  public function logout () {
    cookie('disney_token', null);
    return json_encode(1);
  }

  public function login ($user, $pass) {
    $model = new Model();

    return json_encode($model -> login($user, $pass));
  }
}