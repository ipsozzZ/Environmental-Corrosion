<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Activity as Model;

class Activity extends Controller {
  /**
   * 获取所有动态 TODO: 获取登录的用户的孩子的动态
   */
  function getActivity () {
    $model = new Model();

    return json_encode($model -> getActivity());
  }
}