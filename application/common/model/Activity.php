<?php
namespace app\common\model;

use think\Model;
use app\admin\model\User;

class Activity extends Model {

  /**
   * 获取动态
   */
  public function getActivity () {
    $model = $this -> newInstance();
    $activitys = $model
      -> alias('a')
      -> join('baby b', 'a.bid = b.id')
      -> limit(3)
      -> order('a.id', 'desc')
      -> select();
    return $activitys;
  }

  public function getUserBabyActivity ($uid, $limit) {
    $userBabyModel = new Userbaby();
    $bids = $userBabyModel -> getUserBids($uid);
    $model = $this -> newInstance();
    // var_dump($bids);
    $activitys = $model
      -> alias('a')
      -> join('baby b', 'a.bid = b.id')
      -> where('bid', 'in', $bids)
      -> limit($limit) -> select();

    return $activitys;
  }
}