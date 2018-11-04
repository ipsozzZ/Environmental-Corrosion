<?php
namespace app\mobile\controller;

use think\Controller;
use think\Cookie;
use app\common\controller\User;
use app\common\controller\Activity;

class Mine extends Controller
{
  private $userModel;
  private $user;
  private $token;
  private $isLogin;

  public function _initialize() {
    $this -> token = cookie('disney_token');
    if($this -> token) {
      $this -> isLogin = true;
    } else {
      $this -> isLogin = false;
    }
    $this -> user = $this -> getUser($this -> token);
    if(!is_object($this -> user)) {
      $this -> isLogin = false;
    }
    $this -> assign('user', $this -> user); //用户信息
    $this -> assign('pageTitle', '用户'); //页面标题
    $this -> assign('curPageIndex', 4); //页面底部索引
    $this -> assign('showBackBtn', true); //是否显示返回按钮
    $this -> assign('notShowFooter', false); // 显示footer
    $this -> assign('logined', $this -> isLogin); //登录状态
  }

  private function getUser ($token) {
    $userModel = new User();
    $user = $userModel -> getByToken($token);
    $user = json_decode($user);

    return $user -> data;
  }

  public function index() {
    $activityModel = new Activity();
    if($this -> isLogin) {
      $activity = $activityModel -> getUserBabyActivity($this -> user -> id);
    } else {
      $activity = $activityModel -> getActivity();
    }
    $activity = json_decode($activity);
    $this -> assign('activitys', $activity);
    return view();
  }

  public function edit () {
    $this -> assign('pageTitle', '设置');
    return view('edit');
  }

  public function security () {
    $this -> assign('pageTitle', '安全设置');
    return view('security');
  }

  public function diplomas () {
    $this -> assign('pageTitle', '孩子证书');
    $this -> assign('notShowFooter', true);
    return view('diplomas');
  }

  public function mySubject () {
    $this -> assign('pageTitle', '我的课程');
    $this -> assign('notShowFooter', true);
    return view('mySubject');
  }

  public function analysis () {
    $this -> assign('pageTitle', "分析报告");
    $this -> assign('notShowFooter', true);

    return view("analysis");
  }

  public function activity () {
    $this -> assign('pageTitle', "孩子动态");
    $this -> assign('notShowFooter', true);

    return view("activity");
  }
}