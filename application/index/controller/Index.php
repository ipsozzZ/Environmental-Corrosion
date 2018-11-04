<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use app\common\model\Token;

class Index extends Common
{
    public function index()
    {
        $isLogin = session('user');
        // dump($isLogin);die;
        if(!$isLogin){
            $status = 0;
        }else{
            $status = 1;
        }
        $this -> assign("Status", $status);
        return view();
    }
}
