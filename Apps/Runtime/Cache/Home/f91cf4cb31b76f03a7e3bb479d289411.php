<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="futures">
	<meta name="author" content="liujie">
	<link rel="icon" href="/futures/Public/common/image/favicon.ico">
	<title>futures</title>
	<!-- Bootstrap core CSS -->
	<!--    <link href="/futures/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
	<link href="/futures/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="/futures/Public/bootstrap/css/custom/offcanvas.css" rel="stylesheet">
	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="/futures/Public/bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="/futures/Public/bootstrap/js/jquery.min.js"></script>
	<script src="/futures/Public/bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation"><!--navbar-inverse-->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand">Futures</span>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/futures/index/">Home</a></li>
        <li><a href="/futures/article/index?uid=<?php echo (session('member_uid')); ?>">Blog</a></li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <span style="display: block;padding:20px 15px;position: relative;  padding-top: 15px;">
        欢迎你:<?php echo (session('member_username')); ?>
        </span></li>
        <li>
        <?php if($_SESSION['member_status']== NOT_LOGIN): ?><a href="/futures/user/login">登录</a>
        <?php else: ?>
		<a href="/futures/user/logout">注销</a><?php endif; ?>
        </li>
      </ul>
    </div>
    <!-- /.nav-collapse -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.navbar -->
<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
      <!--class="pull-right visible-xs"-->
	    <!--<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>-->
        <!--<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>-->
      	
		<!-- BEGIN PAGE -->
		
		<div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. </p>
      	</div>
        <div class="row">
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
        <div class="col-xs-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <!--/.col-xs-6.col-lg-4-->
</div>
<!--/row-->



		<!-- END PAGE -->

    </div>
    <!--/.col-xs-12.col-sm-9-->
    
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
      <div class="list-group"> <a href="#" class="list-group-item active">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> <a href="#" class="list-group-item">Link</a> </div>
    </div>
    <!--/.sidebar-offcanvas-->
  </div>
  <!--/row-->
  <hr>
  <footer>
    <p>&copy; Company 2014</p>
  </footer>
</div>
<!--/.container-->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="/futures/Public/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/futures/Public/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="/futures/Public/bootstrap/js/custom/offcanvas.js"></script>
</body>
</html>