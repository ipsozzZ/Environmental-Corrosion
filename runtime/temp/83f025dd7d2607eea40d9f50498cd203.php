<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"E:\xampp\xampp\htdocs\disney\public/../application/index\view\personal\safeInfo.html";i:1540369650;s:73:"E:\xampp\xampp\htdocs\disney\application\index\view\common\login-nav.html";i:1540367090;}*/ ?>
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
        <form id="SafeInfo" class="layui-form" action="?">
            <h2>基本信息修改</h2>

            <div id="SafeInfoNav">
                <a href="#" class="SafeInfoNav-rePwd">
                    <b>密码修改</b>
                </a>
                <a href="<?php echo url('bindPhone'); ?>" class="SafeInfoNav-bindPhone">
                    <b>手机号绑定</b>
                </a>
            </div>
            <hr class="rePwd-hr">
            <hr class="bindPhone-hr">

            <div class="layui-form-item">
                <label class="layui-form-label">原始密码</label>
                <div class="layui-input-inlne">
                    <input type="password" style="width:400px;" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">新密码</label>
                <div class="layui-input-inlne">
                    <input type="password" style="width:400px;" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">确认密码</label>
                <div class="layui-input-inlne">
                    <input type="password" style="width:400px;" name="password" required lay-verify="required" placeholder="请重新输入密码" autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" style="background-color:#f37942; width:100px;margin-left:20px;" lay-submit lay-filter="formDemo">保存</button>
                    <button type="reset" style="background-color:#b2b2b2; width:100px; margin-left:90px;" class="layui-btn layui-btn-primary">取消</button>
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