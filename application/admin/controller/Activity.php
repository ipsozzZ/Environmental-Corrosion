<?php

namespace app\admin\controller;

use think\Controller;

class Activity extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "用户动态");
    }

    /* 用户动态 */
    public function index(){
        $Activity = db('activity') -> select();
        // dump($Activity);die;
        $this -> assign('Activity', $Activity);
        return view();
    }

    /* 用户动态内容 */
    public function info($id = 0){
        $activityinfo = db('activity') -> where('id', $id) -> find();
        $this -> assign('Content', $activityinfo);
        return view();
    }
}