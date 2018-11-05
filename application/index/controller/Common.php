<?php
namespace app\index\controller;

<<<<<<< HEAD
use app\index\model\Nav as ModelNav;
use think\Controller;

class Common extends Controller
{
    protected function _initialize()
    {
        parent::_initialize(); // 继承父类初始化
        $modelNav = new ModelNav();
        $Nav = $modelNav->getNav();
        $this->assign('nav', $Nav);
    }
}
=======
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
>>>>>>> 74284d2f53aad22fc784289ae4d75f3a5f007785
