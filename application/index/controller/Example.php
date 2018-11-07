<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\Article;
use app\common\model\Acate;



class Example extends Common
{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 应用案例
   */
  public function index() {
    $articleModel = new Article();
    $acateModel = new Acate();
    $cates = $acateModel -> getAll();
    $this -> assign('cates', $cates);
    $res = [];
    $i = 0;
    foreach($cates as $cate) {
      $acate = [];
      $cid = $cate['id'];
      $articles = $articleModel -> getBrief(3, [
        'cid' => $cid,
      ]);
      $acate['index'] = $i;
      $acate['name'] = $cate['name'];
      $acate['articles'] = $articles;
      if(count($articles) >= 1) {
        array_push($res, $acate);
      }
      $i++;
    }
    $this -> assign('currTitle','应用案例');
    // var_dump($res);
    // return 0;
    $this -> assign('data', $res);
    return view();
  }

  /**
   * 重大案例
   */
  public function majorCase(){
    $this -> assign('currTitle', '重大案例');
    return view('majorCase');
  }

  /**
   * 专题服务
   */
  public function special(){
    $this -> assign('currTitle', '专题服务');
    return view();
  }
}