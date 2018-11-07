<?php

namespace app\common\model;

use think\Model;
use app\common\model\Token;

/**
 * 文章层
 */
class Article extends Model
{
  /**
   * 获取所有行
   */
  public function getAll() {
    $model = $this -> newInstance();

    return $model -> order('id', 'desc') -> select();
  }

  /**
   * 获取最新咨询
   */
  public function getNews () {
    $model = $this -> newInstance();

    return $model -> order('id', 'desc') -> limit(5) -> select();
  }

  /**
   * 根据id删除一个
   */
  public function deleteById ($id) {
    $model = $this -> newInstance();

    return $model -> where("id", $id) -> delete();
  }

  /**
   * 根据id更新
   */
  public function updateById ($id, $data) {
    $model = $this -> newInstance();

    return $model -> save($data, ['id' => $id]);
  }

  /**
   * 新增一个
   */
  public function add ($data) {
    $model = $this -> newInstance();

    return $model -> save($data);
  }

}