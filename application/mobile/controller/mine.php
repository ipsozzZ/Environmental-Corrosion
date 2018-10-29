<?php
namespace app\mobile\controller;
use think\Controller;

class Mine extends Controller
{
  public function _initialize()
  {
    $this -> assign('pageTitle', '用户');
    $this -> assign('curPageIndex', 4);
    $this -> assign('showBackBtn', true);
    $this -> assign('notShowFooter', false); // 显示footer
  }

  public function index() {
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