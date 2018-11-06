<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Article as Model;

class Article extends Common
{
    public function  _initialize () {
        parent::_initialize();

        $this -> assign([
            "pageTitle"    => "文章管理",
        ]);
    }

    public function index () {
      $model = new Model();
      $articles = $model -> getAll();
      $this -> assign('articles', $articles);

      return view();
    }
}