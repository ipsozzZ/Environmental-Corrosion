<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\controller\Dcate as commonDcate;

class Outdoor extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 室外数据
   */
  public function index()
  {
    $modelDcate = new commonDcate();
    $parentDcate = json_decode($modelDcate->getByLevelAndType(1, 1));
    $childDcate = json_decode($modelDcate->getByLevelAndType(1, 2));
    $dataShow = json_decode($modelDcate->getWildAll());
    $this->assign([
      'currTitle' => '室外数据',
      'parentDcate' => $parentDcate,
      'childDcate' => $childDcate,
      'dataShow' => $dataShow,
    ]);
    return view();
  }

  /**
   * 显示数据
   */
  public function dataShow()
  {
    $this->assign('currTitle', 'St12琼海96');
    return view('dataShow');
  }
}