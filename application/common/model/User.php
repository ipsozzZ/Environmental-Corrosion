<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;
use app\common\model\Msg;

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
   * @param name 用户名
   * @param pass 用户密码
   *
   * @return res [
   *  status: true,
   *  token: 'asdasdas9dasd7',
   * ]
   */
  public function login ($name, $pass) {
    $res = [
      'status' => true,
      'token' => '',
    ];
    $model = $this -> newInstance();
    $passMD5 = md5($pass);
    $user = $model -> where('name', $name) -> where('pass', $passMD5) -> find();

    if(@!$user['id']) {
      $res['status'] = false;
      return $res;
    }

    $tokenModel = new Token();
    $token = $tokenModel -> addToken($user['id'], 2);
    if($token['status'] == true) {
      $res['token'] = $token['token'];
    } else {
      $res['status'] = false;
    }
    return $res;
  }

  /**
   * 短信登录
   * @param phone 用户名
   * @param code 用户密码
   *
   * @return res [
   *  status: true,
   *  token: 'asdasdas9dasd7',
   * ]
   */
  public function msgLogin($phone, $code) {
    $msgModel = new Msg();
    $res = [
      'status' => true,
      'token' => '',
    ];
    if(!$msgModel -> checkCode($phone, $code)) {
      //验证码无效
      $res['status'] = false;
      return $res;
    }

    //验证码有效
    $model = $this -> newInstance();
    $user = $model -> where('phone', $phone) -> find();
    $tokenModel = new Token();
    $token = $tokenModel -> addToken($user['id'], 2);
    if($token['status'] == true) {
      $res['token'] = $token['token'];
    } else {
      $res['status'] = false;
    }
    return $res;
  }

  /**
   * 注册用户
   * @param data ['name' => 用户名, 'pass' => 密码]
   *
   * @return status bool 是否注册成功
   */
  public function register ($data) {
    $model = $this -> newInstance();

    $model -> name = $data['name'];
    $model -> pass = md5($data['pass']);

    $res = $model -> allowField(true) -> save();
    return $res == 1;
  }

  /**
   * 根据id获取用户信息
   */
  public function getById ($id) {
    $model = $this -> newInstance();

    return $model -> get($id);
  }
}