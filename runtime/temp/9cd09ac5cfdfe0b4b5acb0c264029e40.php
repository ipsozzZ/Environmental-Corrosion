<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\personal\index.html";i:1540381185;s:73:"E:\xampp\xampp\htdocs\disney\application\index\view\common\login-nav.html";i:1540367090;}*/ ?>
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
        <div class="Item Demo">

            <div id="Personal" class="layui-row layui-col-space5 Personal-List">
                <div class="layui-col-md4" style="width:80px">
                    <div class="grid-demo grid-demo-bg1 List-img">
                        <img src="/static/index/custom/image/Mood1.png">
                    </div>
                </div>
                <div class="layui-col-md4" style="width:487px">
                    <div class="grid-demo Item-Info">
                        <div style="margin-top:5px;">
                            <span class="title">李明</span>
                            <p class="Decs">性格活泼开朗，有我你每天都会很开兴！</p>
                        </div>
                        <div class="Personal-info">
                            <p class="live">活跃度
                                <span>108</span>
                            </p>
                            <span>获赞
                                <span>88</span>
                            </span>
                            <span>证书
                                <span>5</span>
                            </span>
                            <span>绑定手机号：134****0028</span>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md4">
                    <div class="grid-demo grid-demo-bg1 Operation">
                        <div class="Edit">
                            <a href="<?php echo url('basicInfo'); ?>">
                                <img src="/static/index/custom/image/edit.png">
                            </a>
                            <div>编辑信息</div>
                        </div>
                        <div class="Safe">
                            <a href="<?php echo url('safeInfo'); ?>">
                                <img src="/static/index/custom/image/safe.png">
                            </a>
                            <div>安全设置</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Item Mood">
                <div class="Title">
                    <i class="mark"></i>
                    <h2>
                        <a href="<?php echo url('dynamics'); ?>">我的动态</a>
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

                <div class="grid-demo grid-demo-bg2 More">
                    <a href="<?php echo url('dynamics'); ?>">查看更多</a>
                </div>
            </div>
        </div>

        <div style="background-color:#f8f8f8;" class="Item Demo">
            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">已购买训练</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div class="layui-row layui-col-space5 List">
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome1.jpg">
                        </a>
                        <span>小鸡找孩子</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome2.jpg">
                        </a>
                        <span>快乐的啄木鸟</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome3.jpg">
                        </a>
                        <span>小花的表演</span>
                    </div>
                </div>
            </div>
            <div class="grid-demo grid-demo-bg2 More">
                <a href="#">查看更多</a>
            </div>

            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">历史训练</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div class="layui-row layui-col-space5 List">
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome1.jpg">
                        </a>
                        <span>小鸡找孩子</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome2.jpg">
                        </a>
                        <span>快乐的啄木鸟</span>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/Dome3.jpg">
                        </a>
                        <span>小花的表演</span>
                    </div>
                </div>
            </div>
            <div class="grid-demo grid-demo-bg2 More">
                <a href="#">查看更多</a>
            </div>
        </div>

        <div class="Item Demo">
        
            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">历史训练成绩</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div id="History">
                <ul>
                    <li>初级训练第一阶段成绩总结：在学习了第一周的课程后，我的逻辑思维，逆向思维都有了很大的提升</li>
                    <li>中级训练第一阶段成绩总结：在学习了第二周的课程后，我的进步越来越大了</li>
                    <li>高级训练第一阶段成绩总结：在学习了第三周的课程后，我获得了很多证书荣誉</li>
                </ul>
            </div>

            <div class="Title">
                <i class="mark"></i>
                <h2>
                    <a href="#">我的证书</a>
                </h2>
                <i class="mark"></i>
            </div>

            <div class="layui-row layui-col-space5 List">
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/honor.jpg">
                        </a>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/honor.jpg">
                        </a>
                    </div>
                </div>
                <div class="layui-col-md4 List-Item">
                    <div class="grid-demo grid-demo-bg1">
                        <a href="#">
                            <img class="Paying" src="/static/index/custom/image/honor.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-demo grid-demo-bg2 More">
                <a href="#">查看更多</a>
            </div>
        </div>
    </div>
    <!-- content end -->
    <script src="/static/index/vendor/js/jquery-3.0.0.js"></script>
    <script src="/static/vendor/layui/layui.js"></script>
    <script>
        layui.use(['form', 'layer'], function () {
            var form = layui.form, layer = layui.layer;

            $(".Paying").on('click', function (e) {
                //iframe层-父子操作
                // var aid = $(this).attr("id");

                layer.open({
                    type: 2,
                    area: ['700px', '450px'],
                    // fixed: false, //不固定
                    maxmin: true,
                    content: '<?php echo url("index/practice/info"); ?>'
                });
                // 这里点击按钮默认是会自动跳转回来当前页面的，所以用preventDefault()阻止默认事件
                e.preventDefault(); // 阻止默认事件，
                // return false;
            })
        })
    </script>
</body>

</html>