<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>注册</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
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
          <a href="#">用户注册</a>
        </li>
      </ul>

    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- 注册表单 -->
  <div class="container register">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">用户注册</h3>
        </div>
        <div class="panel-body">
 <form class="form-horizontal" id='register' action="/registerInfo.php"  method="POST">
   <!-- 用户名 -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label" >用户名:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="请输入用户名" name="username" value="">
      </div>
    </div>
    <!-- 密码 -->
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-3 control-label">设置密码:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  placeholder="请输入密码">
      </div>
    </div>
    
    <!-- 确认密码 -->
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-3 control-label">确认密码:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="repassword">
      </div>
    </div>
     <!-- 手机号 -->
     <div class="form-group">
      <label for="inputPassword3" class="col-sm-3 control-label">手机号码:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="phone"  placeholder="请输入11位手机号">
      </div>
    </div>
     <!-- 邮箱 -->
     <div class="form-group">
      <label for="inputPassword3" class="col-sm-3 control-label">邮箱:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="email"  placeholder="请输入邮箱">
      </div>
    </div>
   
    <!-- 提交 -->

    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="isChecked" ><a href="">我已阅读协议书</a>
          </label>
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="col-sm-offset-3 col-sm-4 col-xs-6">
        <button type="submit" class="btn btn-success" >同意协议并注册</button>
      </div>
      <div class="col-sm-5 col-xs-6 login">
        <a href=""> 已有账号，马上登录</a>
      </div>
    </div>
    </form>
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
  <script src="./dist/js/register.min.js"></script>


 
</body>

</html>