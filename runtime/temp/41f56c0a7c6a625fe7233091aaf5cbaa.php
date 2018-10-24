<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\personal\editNews.html";i:1540384022;s:73:"E:\xampp\xampp\htdocs\disney\application\index\view\common\login-nav.html";i:1540367090;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
    <link rel="stylesheet" href="/static/vendor/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/custom/css/main.css">
</head>

<body>
    <!-- header start -->
    <div id="Dome-Header" class="layui-container">
        <div class="layui-row">
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
        <div class="grid-demo grid-demo-bg1 logo">
            <img src="/static/index/custom/image/logo.png" style="margin-right:10px"> 娱 | 教 | 于 | 乐
        </div>
    </div>
    <div id="login-nav" class="layui-col-xs6 layui-col-sm6 layui-col-md4 nav">
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
    <div class="layui-col-xs4 layui-col-sm12 layui-col-md4">
            <div class="grid-demo login-user">
                <span><a href="<?php echo url('/index/personal'); ?>"><img class="login-header" src="/static/index/custom/image/login-header.png"></a> <span>BABYC</span> |
                <a href="#">注销</a>
            </div>
        </div>
</div>
    </div>
    <!-- header end -->

    <!-- content start -->

    <div id="Content">
        <form id="" class="layui-form" action="?">
            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">发表动态</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div id="newsInfo">
                <div class="layui-form-item layui-form-text">
                    <textarea name="" required lay-verify="required" placeholder="请输入" class="layui-textarea"></textarea>
                    <div style="margin-top:13px; margin-left:10px">选择发生位置:</div>
                </div>
            </div>

            <div class="Pictrue">
                <img src="/static/index/custom/image/camera.png" alt="">
            </div>

            <div class="layui-form-item SendInfo">
                <div class="layui-input-block">
                    <button class="layui-btn" style="background-color:#f37942; width:100px;margin-left:20px;" lay-submit lay-filter="formDemo">保存</button>
                </div>
            </div>
        </form>
    </div>
    <!-- content end -->

    <script src="/static/index/vendor/js/jquery-3.0.0.js"></script>
    <script src="/static/vendor/layui/layui.js"></script>
    <script>
        //Demo
        layui.use('form', function () {
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function (data) {
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
    </script>
</body>

</html>