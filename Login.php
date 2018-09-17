<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登录</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/Login.min.css">
</head>

<body>
  <!-- 头部导航 -->
  <?php
    require("./mainHeader.php");
  ?>
  <!-- 下部导航 -->
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="./image/logo.png" alt=""> </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">用户登录</a>
        </li>
      </ul>

    </div>
    <!-- /.container-fluid -->
  </nav>

 <!-- 登录 -->
 <div class="container register">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">用户登录</h3>
        </div>
        <div class="panel-body">
 <form class="form-horizontal" id="loginCheck" method="POST" action='./api/checkLogin.php'>
   <!-- 用户名 -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label" >用户名:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="请输入用户名" name="username">
      </div>
    </div>
    <!-- 密码 -->
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-3 control-label" >密码:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  placeholder="请输入密码">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4 col-xs-12">
        <button type="submit" class="btn btn-success">登 录</button>
      </div>
      <div class="col-sm-4 col-xs-12 login">
        <a href="./register.php">新用户，马上注册</a>
      </div>
    </div>
    </form>
    </div>
    </div>
  </div>

  <!-- 模态框 -->
  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">登录提示</h4>
      </div>
      <div class="modal-body" id="myContent">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
 


    <!-- 页脚 -->
  <?php
    require("./footer.php");
  ?>
  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <script src="./dist/js/Login.min.js"></script>
</body>

</html>