<?php

namespace app\index\validate;


use think\Validate;

class User extends Validate
{
    /* 验证规则 */
    protected $rule  = [
        'name'       => 'require|min:4',
        'password'   => 'require|min:8',
        'repassword' => 'confirm:password',
        'gender'     => 'between:0,1|require',
        'saying'     => 'max:600',
    ];

    /* 验证提示信息 */
    protected $message = [
        'name.require'       => '账号不能为空',
        'name.min'           => '账号长度必须大于等于4位',
        'name.uniquee'       => '账号已存在',
        'password.require'   => '密码不能为空',
        'password.min'       => '密码长度必须大于或者等于8位',
        'repassword.confirm' => '两次输入密码不一致',
        'gender.between'     => '年龄只能是女或者男',
        'gender.require'     => '年龄不能为空',
        'saying.max'         => '200字内介绍自己',
    ];

    /* 场景验证 */
    protected $scene   =  [
        'login'        => ['name', 'password'],
        'register'     => ['name' => 'require|min:4|unique:user','password','repassword'],
        'safeInfo'     => ['password', 'repassword'],
        'basicInfo'    => ['name', 'gender', 'saying'],
    ];
}