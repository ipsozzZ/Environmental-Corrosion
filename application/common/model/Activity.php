<?php
namespace app\common\model;

use think\Model;

class Activity extends Model {

  /**
   * 获取动态
   */
  public function getActivity () {
    $model = $this -> newInstance();
    $activitys = $model -> limit(3) -> order('id', 'desc') -> select();
    return $activitys;
  }
}