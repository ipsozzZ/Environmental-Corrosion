<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $data = array(
            'name'     => 'gqm',
            'nickname' => 'ipso',
            'mail'     => '1975386453@qq.com'
        );
        $this->assign("me",$data);
        return view();
    }
}
