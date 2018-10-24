<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\mood\index.html";i:1540371466;s:75:"E:\xampp\xampp\htdocs\disney\application\index\view\common\bannerOrNav.html";i:1540308685;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudyMood</title>
    <link rel="stylesheet" href="/static/vendor/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/custom/css/main.css">
    <link rel="stylesheet" href="/static/index/custom/css/pageinfo.css">
</head>

<body>
    <!-- header start -->
    <div id="Header" class="layui-container">
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
        <div class="layui-col-xs4 layui-col-sm12 layui-col-md4 login">
            <div class="grid-demo">
                <a href="<?php echo url('index/login/index'); ?>">登录</a> |
                <a href="<?php echo url('index/login/register'); ?>">注册</a>
            </div>
        </div>
    </div>
</div>
    <!-- header end -->
    <!-- content start -->
    <div id="Content">
        <div class="Item Mood">
            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">学习心情</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div class="layui-row layui-col-space5 Mood-List">
                <div class="layui-col-md4" style="width:80px">
                    <div class="grid-demo grid-demo-bg1 List-img">
                        <img src="/static/index/custom/image/Mood1.png">
                    </div>
                </div>
                <div class="layui-col-md4" style="width:487px">
                    <div class="grid-demo Item-Info">
                        <div style="margin-top:5px;">
                            <span class="title">快乐的啄木鸟</span>
                            <span class="time">24分钟之前</span>
                        </div>
                        <p>快乐的学习哈哈哈哈哈哈哈哈哈哈哈哈</p>
                    </div>
                </div>
                <div class="layui-col-md4">
                    <div class="grid-demo grid-demo-bg1 fabul">
                        <span>
                            <img src="/static/index/custom/image/fabul.png">
                            <div>8</div>
                        </span>
                    </div>
                </div>
            </div>

            <hr />

            <div class="layui-row layui-col-space5 Mood-List">
                <div class="layui-col-md4" style="width:80px">
                    <div class="grid-demo grid-demo-bg1 List-img">
                        <img src="/static/index/custom/image/Mood2.png">
                    </div>
                </div>
                <div class="layui-col-md4" style="width:487px">
                    <div class="grid-demo Item-Info">
                        <div style="margin-top:5px;">
                            <span class="title">ipsosoo</span>
                            <span class="time">33分钟之前</span>
                        </div>
                        <p>快乐的学习哈哈哈哈哈哈哈哈哈哈哈哈</p>
                    </div>
                </div>
                <div class="layui-col-md4">
                    <div class="grid-demo grid-demo-bg1 fabul">
                        <span>
                            <img src="/static/index/custom/image/fabul.png">
                            <div>55</div>
                        </span>
                    </div>
                </div>
            </div>

            <hr />

            <div class="layui-row layui-col-space5 Mood-List">
                <div class="layui-col-md4" style="width:80px">
                    <div class="grid-demo grid-demo-bg1 List-img">
                        <img src="/static/index/custom/image/Mood3.png">
                    </div>
                </div>
                <div class="layui-col-md4" style="width:487px">
                    <div class="grid-demo Item-Info">
                        <div style="margin-top:5px;">
                            <span class="title">gqmmmm</span>
                            <span class="time">1小时之前</span>
                        </div>
                        <p>快乐的学习哈哈哈哈哈哈哈哈哈哈哈哈</p>
                    </div>
                </div>
                <div class="layui-col-md4">
                    <div class="grid-demo grid-demo-bg1 fabul">
                        <span>
                            <img src="/static/index/custom/image/fabul.png">
                            <div>888</div>
                        </span>
                    </div>
                </div>
            </div>

            <!-- pageinfo start -->
            <div id="Pageinfo" class="grid-demo grid-demo-bg2">
            </div>
            <!-- pageinfo end -->
        </div>
    </div>
    <!-- content end -->

    <script src="/static/vendor/layui/layui.js" charset="utf-8"></script>
    <script>
        layui.use('laypage', function () {
            var laypage = layui.laypage;

            //执行一个laypage实例
            laypage.render({
                elem: 'Pageinfo' //注意，这里的 test1 是 ID，不用加 # 号
                , count: 50 //数据总数，从服务端得到
                , limit: 9
                , prev: '<'
                , next: '>'
                , theme: "#f37942"
            });
        });
    </script>

</body>

</html>