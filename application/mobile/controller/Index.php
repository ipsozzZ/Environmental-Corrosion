<?php
namespace app\mobile\controller;

use think\Controller;
use app\common\controller\Activity;
use app\common\controller\Mood;
use app\common\controller\User;

class Index extends Controller
{
  public function _initialize () {
    $this -> assign('notShowFooter', false); // 显示footer
  }
  public function index ()
  {
    $activityModel  = new Activity();
    $userModel      = new User();
    $moodModel      = new Mood();
    $token          = cookie('disney_token');
    $user           = $userModel -> getByToken($token);
    $user           = json_decode($user);

    if(is_object($user -> data)) {
      $user   = $user -> data;
      $moods  = $moodModel -> getUserMood($user -> uid);
    } else {
      $moods  = $moodModel -> getMood();
    }

    $activitys  = $activityModel -> getActivity();
    $moods      = json_decode($moods);
    $activitys  = json_decode($activitys);

    $this -> assign('moods', $moods);
    $this -> assign('activitys', $activitys);
    $this -> assign("pageTitle", "首页");
    $this -> assign('curPageIndex', 1); //当前页面索引，用来控制footer下面的icon
    return view();
  }
}
