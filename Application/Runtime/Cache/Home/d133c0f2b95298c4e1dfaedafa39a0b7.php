<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>登陆</title>
        <!-- Bootstrap core CSS -->
        <link href="/blog/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/blog/Public/css/style.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <script src="/blog/Public/js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>.
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form class="form-signin" action="<?php echo U('user/signin');?>" method='post' name="register">
                <h2 class="form-heading">登陆</h2>
                <label for="inputEmail" class="sr-only">用户名</label>
                <input type="text" id="inputName" class="form-control" name="inputName" placeholder="用户名" required autofocus>

                <label for="inputPassword" class="sr-only">密码</label>
                <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="密码" required>

                <label for="verify" class="sr-only">验证码：</label>
                <input type="verify" id='verify'  class='form-control form-verify' name='verify' placeholder="验证码"/>
                <img src="<?php echo U('verify');?>" id='verify-img' onclick="document.getElementById('verify-img').src=src+'?random='+Math.random()"/>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name='auto' checked='1' id='auto'> 下次自动登录
                    </label>
                </div>
                <button class="btn btn-primary btn-block" type="submit">登陆</button>
                <p><a href="<?php echo U('regist');?>">还没有账号?</a></p>
            </form>
            </div> <!-- /container -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="/blog/Public/js/ie10-viewport-bug-workaround.js"></script>
        </body>
    </html>