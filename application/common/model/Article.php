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
  public function getNews ($limit = 5, $filter = []) {
    $model = $this -> newInstance();
    if($filter != []) {
      return $model
        -> where($filter)
        -> order('id', 'desc')
        -> limit($limit)
        -> select();
    }
    return $model -> order('id', 'desc') -> limit($limit) -> select();
  }
  /**
   * 获取数据专题
   */
  public function getDataPro () {
    $cid = 6;
    $model = $this -> newInstance();
    $res = $model
      -> where('cid', $cid)
      -> field('id, cover, title')
      -> order('id', 'desc')
      -> limit(5)
      -> select();

      return $res;
  }

  public function getBrief ($limit = 5, $filter = []) {
    $model = $this -> newInstance();
    if($filter != []) {
      $res =  $model
        -> where($filter)
        -> order('id', 'desc')
        -> limit($limit)
        -> select();
    } else {
      $res = $model -> order('id', 'desc') -> limit($limit) -> select();
    }
    $result = [];
    foreach($res as $r) {
      $article = $r;
      $content = mb_substr($article['content'], 0, 350); //选取前80个字
      $article['content'] = strip_tags($content . "...");
      array_push($result, $article);
    }
    return $result;
  }

  public function search ($key, $start = 1, $length = 10) {
    $model = $this -> newInstance();

    return $Model
      -> where('title', 'like', $key)
      -> order('id', 'desc')
      -> limit($start, $length)
      -> select();
  }

  /**
   * 获取所有行
   */
  public function getAllCardLimit($start = 1, $length = 10) {
    $model = $this -> newInstance();

    return $model
      -> field('id, title, cover, content, ctime, authors, src')
      -> order('id', 'desc')
      -> limit($start, $length)
      -> select();
  }

    /**
   * 获取所有行
   */
  public function getCateCardLimit($cid, $start = 0, $length = 10) {
    $model = $this -> newInstance();

    return $model
      -> where('cid', $cid)
      -> field('id, title, cover, content, ctime, authors, src')
      -> order('id', 'desc')
      // -> limit($start, 10)
      -> select();
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