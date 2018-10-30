<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use app\common\model\Token;

class Index extends Common
{
    public function index()
    {
        return view();
    }

    public function test () {
        $userModel = new User();

        $user = $userModel -> login("iimT", "123456");
        return $user;
    }
}
