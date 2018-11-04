<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;

class Baby extends Model
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
    $baby = $model -> where('name', $name) -> where('pass', $passMD5) -> find();

    if(@!$baby['id']) {
      $res['status'] = false;
      return $res;
    }

    $tokenModel = new Token();
    $token = $tokenModel -> addToken($baby['id'], 1);
    if($token['status'] == true) {
      $res['token'] = $token['token'];
    } else {
      $res['status'] = false;
    }
    return $res;
  }

  /**
   * 手机验证码登录
   * @param  phone 家长电话
   * @param  code  登录验证码
   * @return res['status','token']
   */
  public function msgLogin($phone, $code){
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
    $token = $tokenModel -> addToken($user['id'], 1);
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
    $res = [
      'status' => true,
      'msg'    => ''
    ];
    $model = $this -> newInstance();
    $isExistName = $model -> get($data['name']);
    if($isExistName){
      $res['status'] = false;
      $res['msg']    = '用户名已存在';
      return $res;
    }
    $model -> name = $data['name'];
    $model -> pass = md5($data['pass']);

    $result = $model -> save();
    if($result != 0){
      $res['status'] = false;
      $res['msg']    = '注册失败';
      return $res;
    }
    $res['msg']    = '注册成功';
    return $res;
  }

  /**
   * 根据id获取用户信息
   */
  public function getById ($id) {
    $model = $this -> newInstance();

    return $model -> get($id);
  }
}