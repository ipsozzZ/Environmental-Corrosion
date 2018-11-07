<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Bdsrc as Model;
use app\common\model\Bdata;


class Bdsrc extends Common
{
    public function  _initialize () {
        parent::_initialize();

        $this -> assign([
            "pageTitle"    => "基础数据源管理",
        ]);
    }

    public function index ($id = 0) {
      if($id == 0) return 0;
      $model = new Model();
      $bdsrc = $model -> getAll();
      $bdataModel = new Bdata();
      $parentData = $bdataModel -> get($id);
      $this -> assign('data', $bdsrc);
      $this -> assign('parentData', $parentData);

      return view();
    }

    public function add () {
        $model = new Model();
        $bdataModel = new Bdata();
        $bdata = $bdataModel -> getAll();
        $this -> assign('bdata', $bdata);
        return view();
    }

    public function update() {
        $this -> assign('modifyed', false);
        $id = $this -> request -> post('id');
        $bdid = $this -> request -> post('bdid');
        $search = $this -> request -> post('search');
        $content = $this -> request -> post('content');

        $data = [
          'bdid' => $bdid,
          'search' => $search,
          'content' => $content,
        ];
        $model = new Model();
        if(!$id) {
          $res = $model -> add($data);
          $this->assign('result', "添加成功！");
        } else {
          $res = $model -> updateById($id, $data);
          $this->assign('result', "更新成功！");
        }
        return view('result');
    }

    public function edit ($id = 0) {
        if($id == 0) return 0;
        $model = new Model();
        $data = $model -> get($id);
        $bdataModel = new Bdata();  
        $bdata = $bdataModel -> getAll();
        $this -> assign('bdata', $bdata);
        $this -> assign('data', $data);


        return view();
    }

    public function del($id = 0) {
        if($id == 0) {
            $this->assign('result', "无效的id！");
            return view('result');
        }
        $model = new Model();
        $model -> deleteById($id);
        $this->assign('result', "删除成功！");
        return view('result');
    }
}