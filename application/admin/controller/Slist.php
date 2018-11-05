<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Slist as Model;

class Slist extends Common
{
  public function  _initialize () {
    parent::_initialize();

    $this -> assign([
        "pageTitle"    => "标准列表",
        // 'currMessager' => $currMessager,
    ]);
  }

  public function index ($sid = 0) {
    if($sid == 0) {
      $slist = [];
    } else {
      $model = new Model();
      $slist =  $model -> where("sid", $sid) -> select();
    }
    $this -> assign("slist", $slist);

    return view();
  }

  public function edit ($id = 0) {
    if($id == 0) {
      return 0;
    }
    $model = new Model();
    $astandard = $model -> get($id);
    $this -> assign("astandard", $astandard);
    return view();
  }
}