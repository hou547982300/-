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
            <div class="panel-heading">流水账号</div>
            <div class="panel-body">
            <div class="bs-example" data-example-id="hoverable-table">
      <table class="table table-hover" id="accountflow_list">
        <thead>
          <tr>
            <th>发生额(￥)</th>
            <th>账户余额(￥)</th>
            <th>可用余额</th>
            <th>冻结金额</th>
            <th>发生时间</th>
            <th>类型</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">8.53</th>
            <td>2,451.43</td>
            <td>881.43</td>
            <td>1,570.00</td>
            <td>2017-05-20 16:02:34</td>
            <td>收款</td>
          </tr>
          <tr>
            <th scope="row">8.53</th>
            <td>2,451.43</td>
            <td>881.43</td>
            <td>1,570.00</td>
            <td>2017-05-20 16:02:34</td>
            <td>收款</td>
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