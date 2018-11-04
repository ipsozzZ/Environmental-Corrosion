<?php

namespace app\admin\controller;

use think\Controller;
use app\common\controller\Admin;

class Login extends Controller
{
    /* 管理员登录 */
    public function index()
    {
        if (request()->isPost()) {
            $data = input('post.');
            /* 检查用户数据 */
            $result = $this -> loginCheck($data);
            // dump($result);die;
            if ($result['code'] == 0) {
                $this->error($result['msg']);
            }
            /* 登录成功 */
            // $this->success($result['msg'], '');
            $this->redirect('admin/index/index');
        }
        return view();
    }

    /* 退出登录 */
    public function logOut(){
        session(null,'admin'); // 删除保存在session中的值
        $this->redirect('退出成功！','login/index'); 
    }

    /**
     * 管理员登录验证，先进行格式验证以减少数据库的访问量，来减少服务器压力
     * @param  $data 管理员的登录信息
     * @return array['code','msg']
     */
    protected function loginCheck($data)
    {
        /* 对数据做格式验证 */
        $validate = Validate('Admin');
        if (!$validate->scene('login')->check($data)) {
            return [
                'code' => 0,
                'msg' => $validate->getError(),
            ];
        }

        /* 格式通过后进行数据库验证 */
        $modelAdmin = new Admin();
        $result     = json_decode($modelAdmin -> login($data['name'], $data['pass']));
        if ($result['status'] == false) {
            return [
                'code' => 0,
                'msg' => '管理员账号或密码不正确！',
            ];
        }

        /* 通过登录验证将管理员存入session */
        cookie('disney_token', $result['token']);
        return [
            'code' => 1,
            'msg' => '登录成功!',
        ];
    }
}