<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\dome\index.html";i:1540295641;s:73:"E:\xampp\xampp\htdocs\disney\application\index\view\common\login-nav.html";i:1540367090;}*/ ?>
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
        <div class="Item Demo">
            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">试玩专区</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div id="retrieval">
                <div class="layui-input-block">
                    <select name="city" lay-verify="">
                        <option value="">初级阶段</option>
                        <option value="010">北京</option>
                        <option value="021">上海</option>
                        <option value="0571">杭州</option>
                    </select>
                    <select name="city" lay-verify="">
                        <option value="">第一阶段</option>
                        <option value="010">北京</option>
                        <option value="021">上海</option>
                        <option value="0571">杭州</option>
                    </select>
                </div>
                <div id="search">
                    <input type="text" name="title" required lay-verify="required" placeholder="请输入标目名称" autocomplete="off">
                    <img src="/static/index/custom/image/search.png">   
                </div>
            </div>
            
            <div class="layui-row layui-col-space5 List">
                <p style="margin-left:-620px; color:#f37942;">试玩专区每个账号只能免费试玩3次</p>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome1.jpg">
                        </a>
                        <span>小鸡找孩子</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome2.jpg">
                        </a>
                        <span>快乐的啄木鸟</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome3.jpg">
                        </a>
                        <span>小花的表演</span>
                    </div>
                </div>

                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome1.jpg">
                        </a>
                        <span>小鸡找孩子</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome2.jpg">
                        </a>
                        <span>快乐的啄木鸟</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="<?php echo url('detail'); ?>">
                            <img src="/static/index/custom/image/Dome3.jpg">
                        </a>
                        <span>小花的表演</span>
                    </div>
                </div>
            </div>
            <div class="grid-demo grid-demo-bg2 More">
                <a href="#">查看更多</a>
            </div>
        </div>
    </div>

    <!-- content end -->
</body>

</html>