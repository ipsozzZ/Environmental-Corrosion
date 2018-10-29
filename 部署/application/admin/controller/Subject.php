<?php

namespace app\admin\controller;

use think\Controller;

class Subject extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "课程管理");
    }

    public function index(){
        $Subjects =  db('subject') -> alias('a')
                  -> join('lesson b','a.id = b.sid')
                  -> field("a.*,b.name")
                  -> select();

        $this     -> assign("Subject", $Subjects);
        return    view();
    }
}