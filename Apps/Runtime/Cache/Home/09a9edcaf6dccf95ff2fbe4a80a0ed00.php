<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/futures/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/futures/Public/bootstrap/css/custom/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/futures/Public/bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/futures/Public/bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" method="POST">
        <h2 class="form-signin-heading">请登录</h2>
        <?php if(is_array($errorinfo)): foreach($errorinfo as $key=>$error): ?><span style="color:red" ><?php echo ($error); ?></span><br /><?php endforeach; endif; ?>
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo ($post["email"]); ?>" required autofocus>
        <input type="text" class="form-control" placeholder="用户名" name="username" value="<?php echo ($post["username"]); ?>" required autofocus>
        <input type="password" class="form-control" placeholder="密码" name="password" required>
        <input type="text" class="form-control" placeholder="请输入验证码" name="verify" required>
        <img src="verify" onClick="this.src=this.src+'?'+Math.random()" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="1" name="remember" value="<?php echo ($post["remember"]); ?>"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/futures/Public/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>