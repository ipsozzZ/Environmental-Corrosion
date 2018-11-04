<?php

namespace app\admin\controller;

use think\Controller;

class Trainhis extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "历史课程");
    }

    /* 历史课程 */
    public function index(){
        $Trainhis = db('trainhis') -> select();
        $this -> assign('Trainhis', $Trainhis);
        return view();
    }
}