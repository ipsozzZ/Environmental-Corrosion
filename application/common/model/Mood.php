<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;
use app\common\model\Userbaby;

class Mood extends Model
{
  /**
   * 获取用户孩子的心情
   */
  public function getUserBabyMood ($uid) {
    $model = $this -> newInstance();
    $userBabyModel = new Userbaby();
    $limit = 4;
    $bids = $userBabyModel -> getUserBids($uid);
    $moods = $model
      -> alias('m')
      -> join('baby b', 'm.bid = b.id')
      -> where('bid', 'in', $bids)
      -> limit($limit)
      -> select();
    return $moods;
  }

  /**
   * 获取全局孩子心情
   */
  public function getMood () {
    $model = $this -> newInstance();
    $limit = 4;
    $moods = $model
      -> alias('m')
      -> join('baby b', 'm.bid = b.id')
      -> limit($limit)
      -> select();
    return $moods;
  }
}