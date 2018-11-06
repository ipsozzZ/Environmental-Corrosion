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
   * 登出
   */
  public function logout () {
    cookie('corrosion_token', null);
    return json_encode(1);
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
    $token = $tokenModel -> addToken($user['id'], 1);
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
    //TODO: $data['pass'] = md5($data['pass']);

    $res = $model -> allowField(true) -> save($data);
    return $res == 1;
  }

  /**
   * 根据id获取用户信息
   */
  public function getById ($id) {
    $model = $this -> newInstance();

    return $model -> get($id);
  }

  /**
   * 更新用户信息
   */
  public function updateById ($id, $data) {
    $model = $this -> newInstance();

    $res = $model -> save($data, ['id' => $id]);
    return $res;
  }

  /**
   * 根据token获取用户
   */
  public function getUserByToken($token) {
    $tokenModel = new Token();
    $uid = $tokenModel -> getUidByToken($token, 1);
    if(!$uid) return false;
    $userModel = $this -> newInstance();

    return $userModel -> get($uid);
  }
}