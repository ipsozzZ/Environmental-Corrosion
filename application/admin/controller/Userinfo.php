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
    /* 用户信息 */
    public function index(){
        $userInfo = db('user') -> select();
        $this -> assign('Userinfo',$userInfo);
        return view();
    }
}