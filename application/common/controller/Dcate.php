<?php
namespace app\common\controller;

use think\Controller;

use app\common\model\Dcate as Model;
use app\common\model\Indoordata as IndoorModel;
use app\common\model\Wilddata as WildModel;
use app\common\model\Data as DataModel;

class Dcate extends Controller
{

  /**
   * 通过分类级别
   * @param  Level 分类级别
   * @param  Type  室内1/室外2
   * @return json  查询结果
   */
  public function getByLevelAndType($Type, $Level)
  {
    $model = new Model();
    $modelDcate = $model->getByLevelAndType($Type, $Level);
    return json_encode($modelDcate);
  }

  /**
   * 获取室内数据所有行
   */
  public function getIndoorAll()
  {
    $model = new IndoorModel();
    $indoor = $model->getAll();
    return json_encode($indoor);
  }

  /**
   * 获取野外数据所有行
   */
  public function getWildAll()
  {
    $model = new WildModel();
    $wild = $model->getAll();
    return json_encode($wild);
  }

  /**
   * 通过cid获取所有数据
   * @param  cid  材料分类id
   * @return json
   */
  public function getDataByCid($cid)
  {
    $model = new DataModel();
    $res = $model->getAllByCid($cid);
    return json_encode($res);
  }
}