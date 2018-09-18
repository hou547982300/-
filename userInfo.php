<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P-个人资料</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/perCenter.min.css">
  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./dist/js/checkIsLogin.min.js"></script>
</head>

<body>
  <?php
        require("./header.php");
    ?>

  <!-- 自定义内容区 -->
  <div class="container perCenter">
      <?php
          require_once("./perCenterleft.php");
      ?>
    <div class='col-md-8 col-xs-12' >
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
              <h5 >个人资料</h5>
            </div>
            <div class="panel-body">
            <form class="form-horizontal" id="userInfo">
              <!-- 用户名 -->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                  <p  style="margin:0; padding-top:5px;">xiaoq</p>
                </div>
              </div>
               <!-- 真实姓名 -->
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">真实姓名</label>
                <div class="col-sm-9">
                  <p  style="margin:0; padding-top:5px;">小强</p>
                </div>
              </div>
              <!-- 证件账号 -->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">证件账号</label>
                <div class="col-sm-9">
                  <p  style="margin:0; padding-top:5px;">5108xxxxxxxx1111909</p>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">手机号码</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">联系电话</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" >
                </div>
              </div>
              <!-- 个人学历 -->
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">个人学历</label>
                <div class="col-sm-9">
                <select class="form-control">
                  <option>小学</option>
                  <option>初中</option>
                  <option>高中</option>
                  <option>大学</option>
                </select>
                </div>
              </div>
               <!-- 个人收入 -->
               <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">个人收入</label>
                <div class="col-sm-9">
                <select class="form-control">
                  <option>3000以下</option>
                  <option>4000-8000</option>
                  <option>9000-10000</option>
                  <option>10000以上</option>
                </select>
                </div>
              </div>
              <!-- 联系地址 -->
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">联系地址</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" >
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-primary">保存数据</button>
                </div>
              </div>
            </form>
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

</body>

</html>