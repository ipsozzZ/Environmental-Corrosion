<?php
namespace app\common\model;

use think\Model;

class Userbaby extends Model {

  /**
   * 获取用户的孩子id
   */
  public function getUserBids ($uid) {
    $model = $this -> newInstance();

    $res = $model -> where([
      'uid' => $uid
      ]) -> column("bid");

    return $res;
  }
}