<?php
namespace app\index\controller;

use app\admin\model\Common;
use app\index\model\Nav as ModelNav;
use think\Controller;

class Nav extends Common
{
    public function getNav()
    {
        $modelNav = new ModelNav();
        $modelNav->getNav();
        $this->assign("Nav", $modelNav);
    }
}
