<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\console\command\make\Model;
use think\Session;

class Common extends Controller
{
    protected function _initialize(){
        parent::_initialize(); // 继承父类初始化
    }
}