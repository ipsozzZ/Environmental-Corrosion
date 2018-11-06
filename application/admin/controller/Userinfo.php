<?php

namespace app\admin\controller;

use think\Controller;
use app\index\model\User;
use think\Session;

class Userinfo extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this->assign("pageTitle", "用户信息");
    }
    /* 用户列表 */
    public function index(){
        $userInfo = db('user') -> select();
        $this     -> assign('Userinfo',$userInfo);
        return view();
    }

    /* 用户详情 */
    public function info($id = 0){
        $userinfo = db('user') -> where('id', $id) -> find();
        // dump($userinfo);die;
        return view();
    }

    /* 用户编辑 */
    public function edit($id = 0){
        $user = db('user') -> where('id', $id) -> find();
        // dump($userinfo);exit;
        $this -> assign('user', $user);
        return view();
    }
}