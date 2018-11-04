<?php

namespace app\common\model;

use app\common\model\Token;
use think\Model;

class Admin extends Model
{
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * 管理员登录
     * @param  name 管理员账号
     * @param  pass 管理员密码
     * @return res['status','token']
     */
    public function login($name, $pass)
    {
        $res = [
            'status' => true,
            'token' => '',
        ];

        $model = $this->newInstance();
        $passMD5 = md5($pass);
        $admin = $model->where('name', $name)->where('pass', $pass)->find();

        if (@!$admin['id']) {
            $res['status'] = false;
            return $res;
        }

        $tokenModel = new Token();
        $token = $tokenModel->addToken($admin['id'], 3);
        if ($token['status'] == true) {
            $res['token'] = $token['token'];
        } else {
            $res['status'] = false;
        }
        return $res;
    }

    /**
     * 注册用户
     * @param data ['name' => 用户名, 'pass' => 密码]
     *
     * @return status bool 是否注册成功
     */
    public function register($data)
    {
        $model = $this->newInstance();
        $model->name = $data['name'];
        $model->pass = md5($data['pass']);

        $res = $model->save();
        return $res == 1;
    }

    /**
     * 根据id获取管理员信息
     */
    public function getById($id)
    {
        $model = $this->newInstance();

        return $model->get($id);
    }
}
