<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\dome\detail.html";i:1540304095;s:73:"E:\xampp\xampp\htdocs\disney\application\index\view\common\login-nav.html";i:1540287665;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dome</title>
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
                <a href="#">首页</a>
            </span>
            <span>
                <a href="#">试玩专区</a>
            </span>
            <span>
                <a href="#">训练营</a>
            </span>
        </div>
    </div>
    <div class="layui-col-xs4 layui-col-sm12 layui-col-md4">
            <div class="grid-demo login-user">
                <span><img class="login-header" src="/static/index/custom/image/login-header.png"> <span>BABYC</span> |
                <a href="#">注销</a>
            </div>
        </div>
</div>
    </div>
    <!-- header end -->

    <!-- content start -->

    <div id="Content">
        <div class="Item Demo">
            <div class="layui-row layui-col-space5 detail">

                <div class="descrition"><p>请在下图中画两条直线，把下图分成4个部分。每一部分必须都有一只鸡，并且各有0、1、2、3个鸡蛋。</p></div>

                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img src="/static/index/custom/image/Dome1.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <button class="layui-btn Submit">提交</button>
        </div>
    </div>

    <!-- content end -->
</body>

</html>