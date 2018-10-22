<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\index\index.html";i:1540195073;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/index/vendor/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="static/index/custom/css/main.css">
    <title>Document</title>
</head>

<body>
    <!-- header start -->
    <div id="Header" class="layui-container">
        <div class="layui-row">
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                <div class="grid-demo grid-demo-bg1 logo">
                    <img src="static/index/custom/image/1.jpg" style="margin-right:10px"> 娱 | 教 | 于 | 乐
                </div>
            </div>
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4 nav">
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
            <div class="layui-col-xs4 layui-col-sm12 layui-col-md4 login">
                <div class="grid-demo">登录|注册</div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- content start -->
    <div id="Content">
        <div class="Item Demo">
            <span class="Title">
                <i class="mark-left"></i>
                <h2>ipso</h2>
                <i class="mark-right"></i>
            </span>
        </div>
        <div class="Item Train">
        </div>
        <div class="Item Mood">
        </div>
    </div>
    <!-- conent end -->
    <p><?php echo $me['name']; ?></p>
    <script src="static/index/vendor/layui/layui.js" charset="utf-8"></script>
</body>

</html>