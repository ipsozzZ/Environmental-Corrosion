<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\Bdcate;
use app\common\model\Bdata;
use app\common\model\Bdsrc;

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

    $BdataModel = new Bdata();
    $CurrCate = json_decode($BdcateModel->getById($cid));
    $currCateName = $CurrCate->name;
    $Data = json_decode($BdataModel->getByCid($cid));

    $this->assign([
      'currTitle' => '基础数据',
      'Cate' => $Cate,
      'Data' => $Data,
      'cateName' => $currCateName,
      'currCateName' => $currCateName,
    ]);
    return view();
  }

  /**
   * 基础数据
   * @param cid=1 默认选中的分类id为1
   */
  public function dataContent($cid = 1, $bid = 1)
  {
    $BdcateModel = new Bdcate();
    $Cate = $BdcateModel->getAll();

    $BdataModel = new Bdata();
    $CurrCate = json_decode($BdcateModel->getById($cid));
    $currCateName = $CurrCate->name;
    $Data = json_decode($BdataModel->getByCid($cid));

    $BdsrcModel = new Bdsrc();
    $Src = json_decode($BdsrcModel->getByBdid($bid));
    $this->assign([
      'currTitle' => '基础数据',
      'Cate' => $Cate,
      'Data' => $Data,
      'bdataName' => $Data[0]->name,
      'Src' => $Src,
    ]);
    return view('dataContent');
  }
}