<?php
namespace app\common\controller;

use think\Controller;
use app\common\model\Msg as Model;

class Excel extends Controller
{
  public function getExcleData () {
    $file = request() -> file('file');
  }
}