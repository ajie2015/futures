<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<title>Off Canvas Template for Bootstrap</title>
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
      <a class="navbar-brand" href="#">Project name</a> </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>欢迎你：</li>
        <li><a href="#">Default</a></li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
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
		
    <form action="" method="post">
        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain">
        </script>
        <input type="submit">
    </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/futures/Public/common/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/futures/Public/common/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>

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