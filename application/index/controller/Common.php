<?php
namespace app\index\controller;

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
