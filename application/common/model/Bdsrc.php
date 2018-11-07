<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;

/**
 * 基础数据源
 */
class Bdsrc extends Model
{

  /**
   * 获取所有行
   */
  public function getAll($bdid = 1)
  {
    $model = $this->newInstance();

    return $model
      ->where('bdid', $bdid)
      ->order('id', 'desc')
      ->select();
  }

  /**
   * 通过bdid获取所有行
   */
  public function getByBdid($bdid)
  {
    $model = $this->newInstance();
    $Src = $model->where('bdid', $bdid)->select();
    return json_encode($Src);
  }

  /**
   * 根据id删除一个
   */
  public function deleteById($id)
  {
    $model = $this->newInstance();

    return $model->where("id", $id)->delete();
  }

  /**
   * 根据id更新
   */
  public function updateById($id, $data)
  {
    $model = $this->newInstance();

    return $model->save($data, ['id' => $id]);
  }

  /**
   * 新增一个
   */
  public function add($data)
  {
    $model = $this->newInstance();

    return $model->save($data);
  }

}