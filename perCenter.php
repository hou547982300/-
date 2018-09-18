<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
    <div id="mainContent" class="active">
     <?php
      require_once("./perCenterleft.php");
     ?>
    <div class='col-md-8 col-xs-12 col-sm-6'  id="rightContent">
      <div class="panel panel-default">
      <button type="button" class="btn btn-primary" id="toggleIshow">隐藏</button>
        <div class="panel-heading clearfix">
          <img src="./image/head_icon.jpg" alt="" class="pull-left img-responsive">
          <div class="pull-left">
            <p>昵 称：源代码教育</p>
            <p>用户名：小强</p>
            <p>最后登录时间：2016-10-25 15:30:10</p>
          </div>
        </div>
        <div class="panel-body row">
          <div>
            <div class="col-md-4 col-xs-12">总金额:
              <a href="">10000</a>元</div>
            <div class="col-md-4 col-xs-12">可用金额:
              <a href="">8000</a>元</div>
            <div class="col-md-4 col-xs-12">冻结金额:
              <a href="">2000</a>元</div>
          </div>
          <div>
            <div class="col-md-6 col-xs-6 col-sm-6 firstBtn">
              <button type="button" class="btn btn-primary">账户充值</button>
            </div>
            <div class="col-md-6 col-xs-6 secondBtn">
              <button type="button" class="btn btn-danger">账户提现</button>
            </div>
          </div>
          <div>
            <div class="col-md-4 col-xs-6 col-sm-12 authentication">
              <div >
                <div class="clearfix ">
                  <img src="./image/shiming.png" alt="" class="pull-left">
                <div class="pull-left">
                  <h5>实名认证</h5>
                  <p>未认证:<a href="">马上认证</a></p>
                </div>
                </div>
                <p>实名认证之后才能在平台投资</p>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-12 authentication">
                <div >
                  <div class="clearfix ">
                    <img src="./image/shouji.jpg" alt="" class="pull-left">
                  <div class="pull-left">
                    <h5>手机认证</h5>
                    <p>已认证:<a href="">查看</a></p>
                  </div>
                  </div>
                  <p>可以收到系统操作信息,并增加使用安全性</p>
                </div>
              </div>
              <div class="col-md-4 col-xs-6 col-sm-12 authentication">
                  <div >
                    <div class="clearfix ">
                      <img src="./image/youxiang.jpg" alt="" class="pull-left">
                    <div class="pull-left">
                      <h5>邮箱认证</h5>
                      <p>已认证:<a href="">查看</a></p>
                    </div>
                    </div>
                    <p>你可以设置邮箱来接收重要的信息</p>
                  </div>
                </div>
                <div class="col-md-12 col-xs-6 col-sm-12 authentication" style="text-align: left;">
                    <div >
                      <div class="clearfix ">
                        <img src="./image/baozhan.jpg" alt="" class="pull-left">
                      <div class="pull-left">
                        <h5>VIP会员</h5>
                        <p>普通会员:<a href="">查看</a></p>
                      </div>
                      </div>
                      <p>vip会员,让你更快捷的投资</p>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- 页脚 -->
  <?php
        require("./footer.php");
    ?>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script>
    $('#toggleIshow').on("click",function(){
      $('#mainContent').toggleClass("active");
      if($("#mainContent").hasClass("active")){
        $("#toggleIshow").text("显示");
      }else{
        $("#toggleIshow").text("隐藏");
      }
    })
    var x1,y1;
    $(window).on("touchstart",function(e){
      console.log(e);
       x1 =e.originalEvent.changedTouches[0].clientX;
       y1 =e.originalEvent.changedTouches[0].clientY;
    });
    $(window).on("touchmove",function(e){
       var x2 =e.originalEvent.changedTouches[0].clientX;
       var y2 =e.originalEvent.changedTouches[0].clientY;
    })
    $(window).on("touchend",function(e){
       var x3 =e.originalEvent.changedTouches[0].clientX;
       var y3 =e.originalEvent.changedTouches[0].clientY;
       dx=x3-x1;
       if(Math.abs(dx)>=50){
         console.log(e);
         $("#toggleIshow").trigger("click");
       }
    })
  </script>
</body>

</html>