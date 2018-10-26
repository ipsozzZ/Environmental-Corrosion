<?php
/**
 * Created by PhpStorm.
 * User: 19753
 * Date: 2018/10/23
 * Time: 12:47
 */

namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\console\command\make\Model;
use think\Session;

class Login extends Common
{
    /* 用户登录 */
    public function index(){
        if(request() -> isPost()){
            $data    = input('post.');
            // dump($data);die;
            /* 登录数据验证 */
            $result  = $this -> loginCheck($data);
            /* 登录异常 */
            if($result['code'] == 0){
                $this -> error($result['msg'],'','','2');
            }
            /* 登录成功跳转到首页 */
            $this -> success($result['msg'],'index/index');
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
            /* 登录成功 */
            if($result['code'] == 1){
                /* 整理数据将数据写入数据库 */
                $data['pass']  = $data['password'];
                // unset($data['password']);
                $User  =  new User();
                $User  -> data($data);
                $sql   = $User  -> allowField(true) -> save();
                // dump($sql);die;
                if($sql){
                    $this      -> success($result['msg'],'\indexlogin\index');
                }else{
                    /* 登录失败 */
                    $this      -> error('登录异常');
                }
            }else{
                /* 登录失败 */
                $this          -> error($result['msg']);
            }
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

        /* 验证用户名是否存在数据库中 */
        $User = new User(); // 实例化模型类
        if(!$User -> where('name',$date['name']) -> find()){
            return [
                'code' => 0,
                'msg'  => '用户名不存在'
            ];
        }

        /* 验证用户密码是否正确 */
        if(!$User -> where('pass',$date['password']) -> find()){
            return [
                'code' => 0,
                'msg'  => '用户名密码不正确!',
            ];
        }

        /* 登录成功，将用户名存到session */
        session('user',$date['name'],'index');
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

        /* 注册成功 */
        return [
            'code' => 1,
            'msg'  => '注册成功，现在就登录吧!'
        ];
    }
}