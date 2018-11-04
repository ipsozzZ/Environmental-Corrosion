<?php

namespace app\admin\controller;

use think\Controller;

class Userbuy extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "用户购买信息");
    }

    /* 用户购买列表 */
    public function index(){
        $Buyinfo = db('userbuy') -> select();
        // dump($Buyinfo);die;
        $this -> assign('Buyinfo', $Buyinfo);
        return view();
    }

    /* 用户购买详情 */
    public function info($id = 0){
        $userinfo = db('subject') -> where('id', $id) -> find();
        return view();
    }
}