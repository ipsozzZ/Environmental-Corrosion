<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;

class Index extends Common
{
    public function index()
    {
        return view();
    }

    public function test () {
        $userModel = new User();

        $user = $userModel -> login('5555', '12345');

        return $user;
    }
}
