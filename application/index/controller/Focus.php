<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\Article;
use app\common\model\Acate;
use app\common\model\Focus as Model;




class Focus extends Common
{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 应用案例
   */
  public function index() {
    $model = new Model();
    $articles = $model -> getAllCard();
    $res = [];
    foreach($articles as $article) {
        $article['content'] = strip_tags(mb_substr($article['content'], 0, 200));

        array_push($res, $article);
    }
    $this -> assign('currTitle','科技焦点');
    $this -> assign('data', $res);
    return view("list");
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