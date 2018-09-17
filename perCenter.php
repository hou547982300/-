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
    <div class='col-md-4 col-xs-12 '>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                投资项目
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">黄金</li>
                <li class="list-group-item">房产</li>
                <li class="list-group-item">股票</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                借款项目
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">账户</li>
                <li class="list-group-item">投资信息</li>
                <li class="list-group-item">借款信息</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- 我的账户 -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                aria-controls="collapseThree">
                我的账户
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">账户信息</li>
                <li class="list-group-item">实名认证</li>
                <li class="list-group-item">银行卡管理</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- 资产详情 -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingfour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false"
                aria-controls="collapsefour">
                资产详情
              </a>
            </h4>
          </div>
          <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">账户流水</li>
                <li class="list-group-item">充值明细</li>
                <li class="list-group-item">提现记录</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- 个人资料 -->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingfive">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false"
                aria-controls="collapsefive">
                个人资料
              </a>
            </h4>
          </div>
          <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">账户</li>
                <li class="list-group-item">投资信息</li>
                <li class="list-group-item">借款信息</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class='col-md-8 col-xs-12'>
      <div class="panel panel-default">
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
            <div class="col-md-6 col-xs-6 firstBtn">
              <button type="button" class="btn btn-primary">账户充值</button>
            </div>
            <div class="col-md-6 col-xs-6 secondBtn">
              <button type="button" class="btn btn-danger">账户提现</button>
            </div>
          </div>
          <div>
            <div class="col-md-4 col-xs-12 authentication">
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
            <div class="col-md-4 col-xs-12 authentication">
                <div >
                  <div class="clearfix ">
                    <img src="./image/shouji.jpg" alt="" class="pull-left">
                  <div class="pull-left">
                    <h5>手机认证</h5>
                    <p>已认证:<a href="">查看</a></p>
                  </div>
                  </div>
                  <p>可以收到系统操作信息，并增加使用安全性</p>
                </div>
              </div>
              <div class="col-md-4 col-xs-12 authentication">
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
                <div class="col-md-12 col-xs-12 authentication" style="text-align: left;">
                    <div >
                      <div class="clearfix ">
                        <img src="./image/baozhan.jpg" alt="" class="pull-left">
                      <div class="pull-left">
                        <h5>VIP会员</h5>
                        <p>普通会员:<a href="">查看</a></p>
                      </div>
                      </div>
                      <p>vip会员，让你更快捷的投资</p>
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

</body>

</html>