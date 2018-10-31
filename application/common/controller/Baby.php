<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Baby as Model;

class Baby extends Controller
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

  /**
   * 短信登录
   * @param phone 手机号
   * @param code 验证码
   */
  public function msgLogin ($phone, $code) {
    $model = new Model();
    $res = $model -> msgLogin($phone, $code);
    if($res['status'])
      cookie("disney_token", $res['token']);
    return json_encode($res);
  }
}