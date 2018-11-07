<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\controller\Dcate as commonDcate;

class Indoor extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 室内数据
   */
  public function index()
  {
    $modelDcate = new commonDcate();
    $parentDcate = json_decode($modelDcate->getByLevelAndType(1, 1));
    $childDcate = json_decode($modelDcate->getByLevelAndType(1, 2));
    $dataShow = json_decode($modelDcate->getIndoorAll());
    $this->assign([
      'currTitle' => '室内数据',
      'parentDcate' => $parentDcate,
      'childDcate' => $childDcate,
      'dataShow' => $dataShow,
    ]);
    return view();
  }

  /**
   * 显示数据
   * @param id   当前选中分类的id
   * @param type 当前数据对应的分类名
   */
  public function dataShow($id = 1, $type = '')
  {
    $modelData = new commonDcate();
    $currType = $type;
    $Data = json_decode($modelData->getDataByCid($id));
    $parentData = json_decode($modelData->getByLevelAndType(1, 1));
    $this->assign([
      'currTitle' => '室内数据',
      'parentDcate' => $parentData,
      'Data' => $Data,
      'currType' => $currType,
    ]);
    return view('dataShow');
  }

  /**
   * 显示数据内容
   * @param id 当前查看数据id
   */
  public function dataContent($id = 1)
  {
    $modelData = new commonDcate();
    $Data = json_decode($modelData->getDataById($id));
    $this->assign([
      'Data' => $Data,
    ]);
    return view('dataContent');
  }
}