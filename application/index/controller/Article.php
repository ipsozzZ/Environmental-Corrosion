<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\Article as Model;
use app\common\model\Acate;


class Article extends Common{
  public function _initialize(){
    parent::_initialize();
  }

  /**
   * 一篇文章
   */
  public function Index($id = 0){
    if($id != 0) {
        $model = new Model();
        $article = $model -> get($id);
    }
    $this -> assign('currTitle', $article['title']);
    $this -> assign('article', $article);
    return view();
  }

  public function cate ($id = 0) {
    $model = new Model();
    $acateMoel = new Acate();
    if($id != 0) {
      $cate = $acateMoel -> get($id);
      $articles = $model -> where('cid', $id) -> select();
    } else {
      $articles = [];
      $cate = ['name' => ''];
    }
    $ats = [];
    foreach($articles as $article) {
      $article['content'] = strip_tags($article['content']);

      array_push($ats, $article);
    }
    $this -> assign('currTitle', $cate['name']);
    $this -> assign('articles', $articles);
    $this -> assign('cate', $cate);

    return view();
  }

  public function list($page = 1) {
    $model = new Model();
    $length = 10;
    $start = $length * ($page - 1);
    $articles = $model -> getAllCardLimit($page, $length);
    $this -> assign('pageName', '最新资讯');

    $this -> assign('data', $articles);

    return view();
  }

  /**
   * 搜索页面
   */
  public function search ($key, $page = 1) {
    $model = new Model();
    $length = 10;
    $start = ($page - 1) * $length;
    $articles = $model -> search($key, $start, $length);    
    return view('list');
  }


  public function dataProList($page = 1) {
    $model = new Model();
    $length = 10;
    $start = $length * ($page - 1);
    $articles = $model -> getCateCardLimit(6, $page, $length);
    $this -> assign('pageName', '专题数据');
    $this -> assign('data', $articles);

    return view('list');
  }
}