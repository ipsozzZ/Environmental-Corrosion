<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\index\model\Bdcate;

class Basic extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 基础数据
   * @param cid=1 默认选中的分类id为1
   */
  public function index($cid = 1)
  {
    $BdcateModel = new Bdcate();
    $Cate = $BdcateModel->getAll();

    $this->assign('currTitle', '基础数据');
    return view();
  }
}