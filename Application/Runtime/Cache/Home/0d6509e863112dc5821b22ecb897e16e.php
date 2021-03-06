<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>Blog</title>
        <!-- Bootstrap -->
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link href="/blog/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/blog/Public/css/lightbox.css" rel="stylesheet">
        <link href="/blog/Public/css/style.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <script src="/blog/Public/js/ie-emulation-modes-warning.js"></script>
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="blog-masthead">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Blog</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <form class="navbar-form navbar-left visible-lg" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">发表</a></li>
                            <li><a href="#">下载</a></li>
                            <li><a href="#">关于</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- 系统变量不需要赋值再输出
                            <?php echo (cookie('name')); ?> -->
                            <?php if($_SESSION['user']['username']!= null): ?><li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($_SESSION['user']['username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">完善个人信息</a></li>
                                    <li><a href="<?php echo U('signout');?>">登出</a></li>
                                </ul>
                            </li>
                            <?php else: ?> <li><a href="<?php echo U('User/index');?>">登陆</a></li><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<pre><code>Example code block</code></pre>
<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
<h3>Sub-heading</h3>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                        <div >
<a class="example-image-link " href="/blog/Uploads/images/s1.gif" data-lightbox="example-set"data-title="img1">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s1.gif" alt="image-1" /></a>
<a class="example-image-link " href="/blog/Uploads/images/s2.png" data-lightbox="example-set" data-title="img2">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s2.png" alt="image-1" /></a>
                        </div>
                    </div>
                    <!-- /.blog-post -->
                    <div class="blog-post">
<h2 class="blog-post-title">Another blog post</h2>
<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<div>
<a class="example-image-link" href="/blog/Uploads/images/s3.gif" data-lightbox="example-set"data-title="img1">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s3.gif" alt="image-1" /></a>
<a class="example-image-link" href="/blog/Uploads/images/s4.gif" data-lightbox="example-set" data-title="img2">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s4.gif" alt="image-1"/></a>
                        </div>
                    </div>
                    <!-- /.blog-post -->
                    <div class="blog-post">
<h2 class="blog-post-title">New feature</h2>
<p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
<div>
<a class="example-image-link" href="/blog/Uploads/images/s5.gif" data-lightbox="example-set"data-title="img1">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s5.gif" alt="image-1" /></a>
<a class="example-image-link" href="/blog/Uploads/images/s2.png" data-lightbox="example-set" data-title="img2">
<img class="example-image img-responsive img-thumbnail" src="/blog/Uploads/images/s2.png" alt="image-1"/></a>
                        </div>
                        </div><!-- /.blog-post -->
                        <div class="page-box">
                            <div class="load-more">
<a href="#">点击加载更多</a>
                            </div>
                            <div class="page">
                                <ul class="pagination">
                                    <li><a href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.blog-main -->
                    <div class="col-sm-4 blog-sidebar">
                        <div class="sidebar-module sidebar-module-inset">
<h4>About</h4>
<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        </div>
                        <div class="sidebar-module">
<h4>Archives</h4>
                            <ol class="list-unstyled">
                                <li><a href="#">March 2014</a></li>
                                <li><a href="#">February 2014</a></li>
                                <li><a href="#">January 2014</a></li>
                                <li><a href="#">December 2013</a></li>
                                <li><a href="#">November 2013</a></li>
                                <li><a href="#">October 2013</a></li>
                                <li><a href="#">September 2013</a></li>
                                <li><a href="#">August 2013</a></li>
                                <li><a href="#">July 2013</a></li>
                                <li><a href="#">June 2013</a></li>
                                <li><a href="#">May 2013</a></li>
                                <li><a href="#">April 2013</a></li>
                            </ol>
                        </div>
                        <div class="sidebar-module">
<h4>Elsewhere</h4>
                            <ol class="list-unstyled">
                                <li><a href="#">GitHub</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ol>
                        </div>
                        </div><!-- /.blog-sidebar -->
                        </div><!-- /.row -->
                        </div><!-- /.container -->
                        <footer class="blog-footer">
<p>Blog built for<a href="javascript:void(0);" onclick=window.open('http://www.github.com/gmyboy')> personal learn </a> by
<a  href="javascript:void(0);" onclick=window.open('http://gmyboy.github.io/introduction')>@gmyboy</a>.</p>
<p>
<a href="#">返回顶部</a>
</p>
                        </footer>
<!-- Bootstrap core JavaScript
================================================== -->
                        <!-- Placed at the end of the document so the pages load faster -->
                        <!-- jquery的版本要高，不然弹不出弹出框 -->
                        <script src="/blog/Public/js/jquery.min.js"></script>
                        <script src="/blog/Public/js/bootstrap.min.js"></script>
                        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                        <script src="/blog/Public/js/ie10-viewport-bug-workaround.js"></script>
                        <script src="/blog/Public/js/lightbox.js"></script>
<script>
    lightbox.option({
    'resizeDuration': 700,
    'wrapAround': true
    })
</script>
                    </body>
                </html>