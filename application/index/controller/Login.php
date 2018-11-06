<?php

/**
 * Created by PhpStorm.
 * User: 19753
 * Date: 2018/10/23
 * Time: 12:47
 */

namespace app\index\controller;

use app\common\controller\Baby;
use think\Controller;

class Login extends Common
{
    public function _initialize() {
        parent::_initialize();

        $this -> assign('hint', '');
    }
    /* 用户登录 */
    public function index($hint = '')
    {
        $this -> assign('hint', $hint);
        return view();
    }

    /* 用户注册 */
    public function register()
    {
        return view();
    }

    /**
     * 登录验证
     * @param  data 前台提交的未验证的数据
     * @return array['code','msg]
     */
    public function loginCheck($data)
    {
        /* 账号密码登录 */
        if (isset($data['name']) == 1) {
            /* 验证用户名和密码是否存在数据库中 */
            $user = new User();
            $result = json_decode($user->login($data['name'], $data['pass']));
            dump($result);
            if ($result->status == false) {
                $res = [
                    'code' => 0,
                    'msg' => '用户名或密码不正确!',
                ];
                return $this -> redirect('login/index', ['hint' => $res['msg']]);
            }
            /* 登录成功，将token存到cookie */
            cookie('corrosion_token', $result->token);
            $res =  [
                'code' => 1,
                'msg' => '登录成功',
            ];

            return $this -> redirect('login/index', ['hint' => $res['msg']]);
        }

        /* 手机号码和验证码登录 */
        else {
            /* 验证用户名和密码是否存在数据库中 */
            $user = new User();
            $result = json_decode($user->msgLogin($data['phone'], $data['code']));
            dump($result);
            die;
            if ($result->status == false) {
                $res =  [
                    'code' => 0,
                    'msg' => '用户名或密码不正确!',
                ];
                return $this -> redirect('login/index', ['hint' => $res['msg']]);
            }
            /* 登录成功，将token存到cookie */
            cookie('corrosion_token', $result->token);
            $res =  [
                'code' => 1,
                'msg' => '登录成功',
            ];
            return $this -> redirect('login/index', ['hint' => $res['msg']]);
        }
    }

    /**
     * 用户注册信息验证，在验证规则中已经判断了
     * 数据库中是否已经存在用户注册的用户名，所以不用在调用模型来检查用户名了
     * @param  data 用户注册信息
     * @return array['code','msg']
     */
    public function registerCheck($data)
    {

        /* 验证数据格式是否符合规定 */
        $validate = Validate('Baby');
        if (!$validate->scene('register')->check($data)) {
            return [
                'code' => 0,
                'msg' => $validate->getError(),
            ];
        }

        /* 通过验证,整理数据将数据写入数据库 */
        $Baby = new Baby();
        $res = json_decode($Baby->register($data));
        if ($res->status == false) {
            return [
                'code' => 0,
                'msg' => $res->msg,
            ];
        }
        /* 注册成功 */
        return [
            'code' => 1,
            'msg' => $res->msg,
        ];
    }
}
