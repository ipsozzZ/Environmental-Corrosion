<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\console\command\make\Model;
use think\Session;

class Personal extends Common
{
    public function index(){
        return view();
    }

    /**
     * 基本信息修改 
     * 这里需要指定视图名字，不然默认找的视图名称为basic-info,以后这种格式类似
     */
    public function basicInfo(){
        if(request()      -> isPost()){
            /* 判断用户当前是否是登录状态 */
            if(!session('user')){
                $this     -> error('请先登录后再尝试……','index/login/index');
            }
            /* 通过用户名将用户id查出来 */
            $user         = new User();
            // dump(session('user'));die;
            $UserId       =  $user -> where('name', session('user')) -> find();
            /* 用户已经登录接收前台数据 */
            $data         =  input('post.');
            /* 验证数据的格式是否正确 */
            $validate     =  Validate('User');
            if(!$validate -> scene('basicInfo') -> check($data)){
                $this     -> error($validate -> getError());
            }
            /* 更新数据库 */
            $result       =  $user -> where('id', $UserId['id'])
                          -> update($data);
            /* 更新session中的值 */
            session('user',$data['name'],'index');
        }
        return view('basicInfo');
    }

    /**
     * 安全信息修改 
     */
    public function safeInfo(){
        if(request()  -> isPost()){
            $data     =  input('post.');
            /* 判断用户当前是否登录，如果登录再进行密码修改，否则跳转到用户登录界面 */
            $Username =  session('user');
            if(!$Username){
                $this -> error('请先登录，再尝试……','index/login/index');
            }
            /* 判断用户密码与数据库密码是否一致 */
            $user     = new User();
            $isExist  = $user -> where('pass',$data['pass'])->find();
            if(!$isExist){
                $this -> error('用户密码不正确','','','1');
            }
            /* 如果原始密码和修改后的密码一样的话就就提示错误 */
            if($data['pass'] == $data['password']){
                $this        -> error('新密码不能继续使用原始密码');
            }
            /* 开始更改密码 */
            else{
                unset($data['pass']); // 将$data的原始密码过滤掉
                /* 验证用户的输入格式是否正确 */
                $validate         =  Validate('User');
                if(!$validate     -> scene('safeInfo') -> check($data)){
                    $this         -> error($validate   -> getError());
                }else{
                    $data['pass'] =  $data['password'];
                    unset($data['password']);
                    unset($data['repassword']);
                    dump($data);
                    dump($Username);
                    /* 更新数据库 */ 
                    $result       =  $user ->where('name',$Username) 
                                           -> update($data);
                    if(!$result){
                        $this     -> error('密码修改失败!');
                    }else{
                        $this     -> success('密码修改成功!','index/personal/index');
                    }
                }
            }
        }
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

   /* 我的已经购买的训练 */
   public function myPractice(){
       return view("myPractice");
   }

   /* 历史训练 */
   public function historyTrain(){
       return view("historyTrain");
   }

   /* 历史训练成绩 */
   public function achievement(){
       return view();
   }

   /* 我的证书 */
   public function myHonor(){
       return view('myHonor');
   }
}