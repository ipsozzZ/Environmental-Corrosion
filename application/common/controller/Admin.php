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
  public function login ($admin, $pass) {
    $model = new Model();
    return json_encode($model -> login($admin, $pass));
  }

  /**
   * 管理员注册
   * @param  data 管理员注册信息
   * @return res  数据处理结果true或false
   */
  public function register($data){
      $model = new Model();
      $res = $model -> register($data);
      return $res;
  }
}