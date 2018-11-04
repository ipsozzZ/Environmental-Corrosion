<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Mood as Model;

class Mood extends Controller {
  /**
   * 获取孩子心情
   */
  public function getUserMood ($uid) {
    $model = new Model();

    $moods = $model -> getUserBabyMood($uid);

    return json_encode($moods);
  }

  /**
   * 获取全局孩子心情
   */
  public function getMood () {
    $model = new Model();

    $moods = $model -> getMood();

    return json_encode($moods);
  }
}