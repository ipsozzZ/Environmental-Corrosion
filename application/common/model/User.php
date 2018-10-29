<?php

namespace app\common\model;

use think\Model;

class User extends Model
{

  /**
   * 初始化模型类
   */
  protected function initialize(){
    parent::initialize();
  }

  /**
   * 登录
   * @param $name 用户名
   * @param $pass 用户密码
   *
   * @return [
   *  status: true,
   *  token: 'asdasdas9dasd7',
   * ]
   */
  public function login ($name, $pass) {
    $model = $this -> newInstance();
    $passMD5 = md5($pass);
    $user = $model -> where('name', $name) -> where('pass', $pass);

    return $user;
  }

  /**
   * 注册用户
   * @param $data
   *
   * @return [
   *  status: true,
   *  token: 'asdasdas9dasd7',
   * ]
   */
  public function register ($data) {
    $model = $this -> newInstance();

    $model -> name = $data['name'];
    $model -> pass = md5($data['pass']);
    
    $res = $model -> save();
    return $res == 1;
  }

  private function  genToken ($name) {
    return md5($name . "disney" . time());
  }
}