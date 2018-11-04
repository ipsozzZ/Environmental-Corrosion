<?php

namespace app\admin\controller;

use think\Controller;

class Score extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign('pageTitle', "历史成绩");
    }

    /* 历史成绩 */
    public function index(){
        $Score = db('score') -> select();
        $this -> assign('Score', $Score);
        return view();
    }
}