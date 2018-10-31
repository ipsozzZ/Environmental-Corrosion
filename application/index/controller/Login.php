<?php
/**
 * Created by PhpStorm.
 * User: 19753
 * Date: 2018/10/23
 * Time: 12:47
 */

namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use think\Session;

class Login extends Common
{
    /* 用户登录 */
    public function index () {
        if(request() -> isPost()){
            $data    = input('post.');
            /* 登录数据验证 */
            $result  = $this -> loginCheck($data);
            /* 登录异常 */
            if($result['code'] == 0){
                $this -> error($result['msg'],'','','2');
            }
            $this -> redirect('index/index');
        }
        return view();
    }

    /* 用户注册 */
    public function register(){
        if(request()   -> isPost()){
            /* 接收数据 */
            $data      = input('post.');
            /* 数据验证 */
            $result    = $this -> registerCheck($data);
            if($result['code'] == 0){
                /* 注册失败 */
                $this          -> error($result['msg']);
            }
            /* 注册成功 */
            $this -> success($result['msg'],'login/index');
        }
        return view();
    }

    /**
     * 用户登录验证
     * @param  $data 前台提交的未验证的数据
     * @return array['code','msg]
     */
    protected function loginCheck($date){

        /* 验证数据格式是否符合要求 */
        $validate = Validate('User'); // 实例化一个User验证器类
        if(!$validate -> scene('login') -> check($date)){
            return [
                'code' => 0,
                'msg'  => $validate -> getError(),
            ];
        }

        /* 验证用户名和密码是否存在数据库中 */
        $user = new User(); // 实例化模型类
        $result  = $user -> login($data['name'],$data['pass']);
        if($result['status'] == false){
            return [
                'code' => 0,
                'msg'  => '用户名或密码不正确!'
            ];
        }
        /* 登录成功，将token存到cookie */
        cookie('disney_token', $result['token']);
        return [
            'code' => 1,
            'msg'  => '登录成功',
        ];
    }

    /**
     * 用户注册信息验证，在验证规则中已经判断了
     * 数据库中是否已经存在用户注册的用户名，所以不用在调用模型来检查用户名了
     * @param  $data 用户注册信息
     * @return array['code','msg']
     */
    public function registerCheck($data){
        
        /* 验证数据格式是否符合规定 */
        $validate      = Validate('User');
        if(!$validate  -> scene('register') -> check($data))
        {
            return [
                'code' => 0,
                'msg'  => $validate -> getError(),
            ];
        }

        /* 通过验证,整理数据将数据写入数据库 */
        $data['pass']  = $data['password'];
        $User  =  new User();
        $sql   = $User  -> register($data);
        if($sql != 1){
            
        }
        if(!$sql){
           return [
               'code' => 0,
               'msg'  => '服务器异常',
           ];
        }
        /* 注册成功 */
        return [
            'code' => 1,
            'msg'  => '注册成功，现在就登录吧!'
        ];
    }
}