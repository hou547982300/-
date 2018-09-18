<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P-个人中心</title>
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
            <div class="panel-heading">实名认证</div>
            <div class="panel-body">
             
              <form class="form-horizontal" id="realAuth">
                <!-- 用户名 -->
                <p  class="realAuthTile">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                  <div class="col-sm-9">
                  <p class="user">小强</p>
                  </div>
                </div>

                <!-- 姓名 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="如:张三">
                  </div>
                </div>

                <!-- 性别 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">性别</label>
                  <div class="col-sm-9">
                  <select class="form-control">
                    <option value="1">男</option>
                    <option vule="0">女</option>
                  </select>
                  </div>
                </div>

                <!-- 出生日期 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">出生日期</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="如:张三">
                  </div>
                </div>

                <!-- 证件地址 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">证件地址</label>
                  <div class="col-sm-9">
                    <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                  </div>
                </div>
                <!-- 身份证照片 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">身份证照片</label>
                  
                  <div class="col-sm-9" id="idcardIMg">
                    <p>请点击“选择图片”,选择证件的正反两面照片。</p>
                    <div class="img">
                          <div>
                            <a href="#">上传正面</a>
                            <img src=""  width="30%" class="img-rounded">
                          </div>
                          <div>
                            <a href="#">上传正面</a>
                            <img src="" width="30%" class="img-rounded">
                          </div>
                          <a href="#">查看样板</a>
                    </div>
                    
                    
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">提交认证</button>
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