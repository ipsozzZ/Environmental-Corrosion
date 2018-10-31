<?php
namespace app\mobile\controller;

use think\Controller;
use app\common\model\Activity;

class Index extends Controller
{
  public function _initialize () {
    $this -> assign('notShowFooter', false); // 显示footer
  }
  public function index ()
  {
    $activityModel = new Activity();
    $activitys = $activityModel -> getActivity();

    $this -> assign('activitys', $activitys);
    $this -> assign("pageTitle", "首页");
    $this -> assign('curPageIndex', 1); //当前页面索引，用来控制footer下面的icon
    return view();
  }
}
