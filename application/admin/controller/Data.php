<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Data as Model;
use app\common\model\Dcate;

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

    public function addIndoor () {
        $cateModel = new Dcate();
        $icates = $cateModel -> getByFilter(['type' => 1, 'level' => 2]); //室内数据二级分类

        $this -> assign([
            'icates' => $icates,
        ]);
        return view();
    }
    public function addWild () {
        $cateModel = new Dcate();
        $wcates = $cateModel -> getByFilter(['type' => 2, 'level' => 2]); //野外数据二级分类

        $this -> assign([
            'wcates' => $wcates
        ]);
        return view();
    }

    public function update () {
        $id             = $this -> request -> post('id');
        $title          = $this -> request -> post('title');
        $cid            = $this -> request -> post('cid');
        $type           = $this -> request -> post('type');
        $position       = $this -> request -> post('position');
        $cycle          = $this -> request -> post('cycle');
        $mname          = $this -> request -> post('mname');
        $content        = $this -> request -> post('content');


        $data = [
            'title'         => $title,
            'cid'           => $cid,
            'type'          => $type,
            'position'      => $position,
            'cycle'         => $cycle,
            'content'       => $content,
            'mname'         => $mname,
        ];
        $model = new Model();
        if (!$id) {
            $res = $model->add($data);
            if ($res) {
                $this->assign('result', "添加成功！");
            } else {
                $this->assign('result', "添加失败！");
            }
        } else {
            $res = $model->updateById($id, $data);
            if ($res) {
                $this->assign('result', "修改成功！");
            } else {
                $this->assign('result', "修改失败！");
            }
        }

        return view('result');
    }

    public function edit ($id = 0) {
        if($id == 0) {
            $this->assign('result', "无效的id！");
            return view('result');
        }
        $cateModel = new Dcate();
        $icates = $cateModel -> getByFilter(['type' => 1, 'level' => 2]); //室内数据二级分类
        $wcates = $cateModel -> getByFilter(['type' => 2, 'level' => 2]); //野外数据二级分类

        $this -> assign([
            'icates' => $icates,
            'wcates' => $wcates
        ]);
        $model = new Model();
        $data = $model -> get($id);
        $this -> assign ("data", $data);

        return view();
    }
}