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
            <div class="panel-heading">实名认证</div>
            <div class="panel-body">
              <p>为了保护你的账户安全，实名认证成功后不能修改信息，请认真填写</p>
              <form class="form-horizontal">
                <!-- 用户名 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                  <div class="col-sm-10">
                  <input type="text"  disable id="inputEmail3" value="小强" style="border:none; outline:none">
                  </div>
                </div>

                <!-- 姓名 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="如:张三">
                  </div>
                </div>

                <!-- 性别 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
                  <div class="col-sm-10">
                  <select class="form-control">
                    <option value="1">男</option>
                    <option vule="0">女</option>
                  </select>
                  </div>
                </div>

                <!-- 出生日期 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">出生日期</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="如:张三">
                  </div>
                </div>

                <!-- 证件地址 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">证件地址</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="如:张三">
                  </div>
                </div>
                <!-- 身份证照片 -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">身份证照片</label>
                  <div class="col-sm-10">
                    <img src="" title="正面"  width="30%" height="30%">
                    <img src="" title="侧面" width="30%" height="30%">
                  </div>
                </div>

                <!-- <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
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