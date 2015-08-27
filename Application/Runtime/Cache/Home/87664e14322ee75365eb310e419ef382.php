<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>注册</title>
        <!-- Bootstrap -->
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link href="/blog/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/blog/Public/css/style.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form class="form-regist" action="<?php echo U('user/runRegis');?>" method='post' name="register">
                <h2 class="form-heading">注册</h2>
                <label for="inputName" class="sr-only">用户名</label>
                <input type="text" id="inputName" class="form-control" name='inputName' placeholder="用户名" required="" autofocus="">
                <label for="inputEmail" class="sr-only">邮箱</label>
                <input type="email" id="inputEmail" class="form-control"name='inputEmail' placeholder="邮箱" required="" autofocus="">
                <label for="inputPassword" class="sr-only">密码</label>
                <input type="password" id="inputPassword" class="form-control" name='inputPassword'placeholder="密码" required="">
                <label for="certainPassword" class="sr-only">确认密码</label>
                <input type="password" id="certainPassword" class="form-control" name='certainPassword'placeholder="确认密码" required="">
                <label for="verify" class="sr-only">验证码：</label>
                <input type="text" id='verify'  class='form-control form-verify' name='verify' placeholder="验证码" required="" />
                <img alt="" src="<?php echo U('verify');?>" id='verify-img' onclick="document.getElementById('verify-img').src=src+'?random='+Math.random()"/>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> 记住密码
                    </label>
                </div>
                <button class="btn btn-primary btn-block" type="submit">登陆</button>
                <p><a href="<?php echo U('index');?>">我有账户</a></p>
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/blog/Public/js/jquery-1.8.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/blog/Public/js/bootstrap.min.js"></script>
    </body>
</html>