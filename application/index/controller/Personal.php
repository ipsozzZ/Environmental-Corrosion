<?php
namespace app\index\controller;

use think\Controller;

class Personal extends Controller
{
    public function index(){
        return view();
    }

    /**
     * 基本信息修改 
     * 这里需要指定视图名字，不然默认找的视图名称为basic-info,以后这种格式类似
     */
    public function basicInfo(){
        return view('basicInfo');
    }

    /**
     * 安全信息修改 
     */
    public function safeInfo(){
        return view('safeInfo');
    }

    /**
     * 修改绑定手机号 
     */
   public function bindPhone(){
       return view('bindPhone');
   }

   /**
    * 我的动态 
    */
   public function dynamics(){
       return view();
   }

   /**
    * 编辑动态
    */
   public function editNews(){
       return view('editNews');
   }
}