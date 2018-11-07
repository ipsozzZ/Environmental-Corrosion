<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\Article as Model;

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
}