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
    <div class='col-md-8 col-xs-12' >
        <div class="panel panel-default">
            <div class="panel-heading">借款项目</div>
            <div class="panel-body">
            <div class="bs-example" data-example-id="hoverable-table">
      <table class="table table-hover" id="bid_request_list">
        <thead>
          <tr>
            <th>标题</th>
            <th>时间</th>
            <th>借款金额(元)</th>
            <th>期限</th>
            <th>利率</th>
            <th>状态</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">江湖救急信</th>
            <td>2016-01-02</td>
            <td>2000</td>
            <td>12月</td>
            <td>12%</td>
            <td>待发布 招标中 满标未审核 还款中 招标拒绝</td>
          </tr>
       
        </tbody>
      </table>
  </div><!-- /example -->
             
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