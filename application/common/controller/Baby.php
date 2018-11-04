<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Baby as Model;

class Baby extends Controller
{
  public function _initialize () {
    parent::_initialize();
  }

  public function logout () {
    cookie('disney_token', null);
    return json_encode(1);
  }

  /* 账号密码登录 */
  public function login ($baby, $pass) {
    $model = new Model();
    return json_encode($model -> login($baby, $pass));
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

  /**
   * 用户注册
   * @param  data 用户注册信息
   * @return res  数据处理结果true或false
   */
  public function register($data){
      $model = new Model();
      $res = $model -> register($data);
      return json_encode($res);
  }
}