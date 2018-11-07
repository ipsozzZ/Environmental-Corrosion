<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;

/**
 * 室内/野外数据层
 */
class Data extends Model
{

  /**
   * 获取所有行
   */
  public function getAll()
  {
    $model = $this->newInstance();

    return $model->all();
  }

  /**
   * 通过cid获取符合条件的所有记录
   * @param cid 材料分类
   */
  public function getAllByCid($cid)
  {
    $model = $this->newInstance();
    $res = $model->where("cid", $cid)->select();
    return $res;
  }

  /**
   * 通过id获取符合条件的一条记录
   * @param id 数据id
   */
  public function getById($id)
  {
    $model = $this->newInstance();
    $res = $model->where("id", $id)->find();
    return $res;
  }

  /**
   * 通过id获取符合条件的一条记录
   * @param id 数据id
   */
  public function getDataById($id)
  {
    $model = $this->newInstance();
    $res = $model->where("id", $id)->find();
    return json_encode($res);
  }

  /**
   * 根据筛选条件获取所有
   */
  public function getAllByFilter($filter)
  {
    $model = $this->newInstance();

    return $model
      ->where($filter)
      ->select();
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
   * 根据id更新
   */
  public function updateDataById($id, $data)
  {
    $model = $this->newInstance();

    return json_encode($model->save($data, ['id' => $id]));
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