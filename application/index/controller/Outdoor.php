<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\controller\Dcate as commonDcate;
use app\common\model\Data;

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
    $parentDcate = json_decode($modelDcate->getByLevelAndType(2, 1));
    $childDcate = json_decode($modelDcate->getByLevelAndType(2, 2));
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
   * @param id   当前选中分类的id
   * @param type 当前数据对应的分类名
   */
  public function dataShow($id = 1, $type = '')
  {
    $modelData = new commonDcate();
    $currType = $type;
    $Data = json_decode($modelData->getDataByCid($id));
    $this->assign([
      'currTitle' => '室外数据',
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
      'currTitle' => '室外数据',
      'Data' => $Data,
    ]);
    return view('dataContent');
  }

  /**
   * 用户进入数据详情页之后浏览数加1
   */
  public function addDataView()
  {
    if (request()->isAjax()) {
      $data = input('post.');
      $model = new Data();
      $Data = json_decode($model->getDataById($data['id']));
      $Data->viewer += 1;

      $update = json_encode($model->updateDataById($data['id'], $Data));
      return 'ok';
    }
  }
}