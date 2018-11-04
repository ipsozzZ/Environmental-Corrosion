<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Activity as Model;

class Activity extends Controller {
  /**
   * 获取所有动态
   */
  function getActivity () {
    $model = new Model();

    return json_encode($model -> getActivity());
  }

  /**
   * 获取用户孩子的动态
   */
  function getUserBabyActivity ($uid) {
    $model = new Model();
    $limit = 4;

    $res = $model -> getUserBabyActivity($uid, $limit);

    return json_encode($res);
  }
}