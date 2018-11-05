<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\controller\Scate as commonScate;
use app\common\controller\Standard as commonStandard;

class Standard extends Common

{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 标准规范
   */
  public function index()
  {
    /* 获取全部标准分类 */
    $modelScate = new commonScate();
    $parentScate = json_encode($modelScate->getScateByLevel(1));
    $childScate = json_encode($modelScate->getScateByLevel(2));

    /* 获取全部标准 */
    $modelStandard = new commonStandard();
    $standard = json_decode($modelStandard->getStandard());

    $this->assign([
      'currTitle' => '标准规范',
      'parentScate' => $parentScate,
      'childScate' => $childScate,
      'standard' => $standard,
    ]);
    return view();
  }
}