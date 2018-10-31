<?php
namespace app\common\model;

use think\Model;
use app\common\model\User;

class Token extends Model {
  private $expireDay;
  /**
   * 初始化模型类
   */
  protected function initialize(){
    $this -> expireDay = 3;
    parent::initialize();
  }

  /**
   * 新增一个token
   * @param uid 用户id
   * @param type 用户类型 1 孩子 2 家长 3 管理员
   * @return [
   *  status: bool 状态，
   *  token: 新的token
   * ]
   */
  public function addToken ($uid, $type) {
    $this -> deleteByUid($uid);

    $model = $this -> newInstance();
    $userModel = new User();
    $user = $userModel -> getById($uid);
    $name = $user['name'];
    $newToken = $this -> genToken($name);

    $model -> token = $newToken;
    $model -> uid   = 1; //$user['id'];
    $model -> type  = $type;
    $model -> expire = date('Y-m-d H:i:s',strtotime('+1 day'));

    $res = $model -> save();
    return [
      'status' => $res == 1,
      'token' => $newToken
    ];
  }

  public function getUserByToken () {

  }

  public function deleteByUid ($uid) {
    $model = $this -> newInstance();
    $tokens = $model -> where('uid',$uid) -> delete();
    return $tokens;
  }

  private function genToken ($name) {
    return md5($name . "disney" . time());
  }
}