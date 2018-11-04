<?php
namespace app\admin\controller;

use think\Controller;


class Index extends Common
{
    public function  _initialize () {
        parent::_initialize();

        $this -> assign([
            "pageTitle"    => "首页",
            // 'currMessager' => $currMessager,
        ]);
    }
    public function index()
    {
        return view();
    }
}
