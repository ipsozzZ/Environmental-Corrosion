<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\login\register.html";i:1540284638;s:67:"E:\xampp\xampp\htdocs\disney\application\index\view\common\nav.html";i:1540308609;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/vendor/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/custom/css/main.css">
    <title>register</title>
</head>

<body>
    <!-- header start -->
    <div id="Login-Header" class="layui-container">
        <div class="layui-row">
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
        <div class="grid-demo grid-demo-bg1 logo">
            <img src="/static/index/custom/image/logo.png" style="margin-right:10px"> 娱 | 教 | 于 | 乐
        </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4 nav">
        <div class="grid-demo">
            <span>
                <a href="<?php echo url('/index/index/index'); ?>">首页</a>
            </span>
            <span>
                <a href="<?php echo url('/index/dome/index'); ?>">试玩专区</a>
            </span>
            <span>
                <a href="<?php echo url('/index/practice/index'); ?>">训练营</a>
            </span>
        </div>
    </div>
</div>
    </div>
    <!-- header end -->
    <div id="Login" class="layui-container layui-row">
        <div class="Login-Info login">
            <form class="layui-col-md3 layui-col-md-offset1 layui-form" action="index/login/index" method="post">
                <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                    <div class="grid-demo grid-demo-bg1 logo">
                        <img src="/static/index/custom/image/logo.png" style="margin-right:10px">
                        <span>娱 | 教 | 于 | 乐</span>
                    </div>
                </div>
                <div id="Login-Nav">
                    <a href="<?php echo url('index/login/index'); ?>" class="register-login"><b>登录</b> </a>
                    <a href="#" class="register-reg"> <b>注册</b> </a>
                </div>
                <hr class="register-login-hr">
                <hr class="register-reg-hr">

                <div class="layui-form-item Form-Item">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input"> 
                </div>
                <div class="layui-form-item Form-Item">
                    <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input"> 
                </div>
                <div class="layui-form-item Form-Item">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input"> 
                </div>
                <input type="submit" class="layui-btn layui-btn-fluid submit">
            </form>
        </div>
    </div>
</body>

</html>