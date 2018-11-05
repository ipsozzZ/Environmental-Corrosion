<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Standard as Model;

class Standard extends Common
{

  public function _initialize()
  {
    parent::_initialize();
    $this -> assign('pageTitle', '标准管理');
  }
  
  public function index () {
    $model = new Model();
    $standards = $model -> getAll();

    $this -> assign("standards", $standards);
    return view();
  }

  public function edit ($id = 0) {
    if($id == 0) {
      return 0;
    }
    $model = new Model();
    $standard = $model -> get($id);
    $this -> assign("standard", $standard);

    return view();
  }

  /**
   * 更新分类
   */
  public function update() {
    $id = $this -> request -> post('id');
    $name = $this -> request -> post('name');
    $data = [
      'name' => $name,
    ];
    $model = new Model();
    if(!$id) {
      $res = $model -> add($data);
    } else {
      $res = $model -> updateById($id, $data);
    }
    if($res) {
      $this -> assign('modifyed', true);
    }

    return $this -> redirect("standard/index");
  }

  /**
   * 删除操作
   */
  public function del($id) {
    if(!$id) {
      return 0;
    }
    $carouselModel = new Model();
    $res = $carouselModel -> deleteById($id);

    return $this -> redirect("standard/index");
  }
}