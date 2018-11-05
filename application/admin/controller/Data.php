<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Data as Model;

class Data extends Common
{
    public function  _initialize () {
        parent::_initialize();

        $this -> assign([
            "pageTitle"    => "首页",
            // 'currMessager' => $currMessager,
        ]);
    }

    public function index ($cid = 0, $type = 0) {
      if($cid == 0 || $type == 0) {
        return 0;
      }
      $model = new Model();
      $data = $model -> getAll();

      $this -> assign('data', $data);

      return view();
    }
}