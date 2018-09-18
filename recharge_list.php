<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P-账户充值</title>
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
    <div class='col-md-8 col-xs-12'>
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <button type="button" class="btn btn-danger pull-right">账户充值</button>
          <h5 class="pull-left">充值明细</h5>
        </div>

        <div class="panel-body">
          <div class="bs-example" data-example-id="hoverable-table">
            <table class="table table-hover" id="accountflow_list">
              <thead>
                <tr>
                  <th>充值时间</th>
                  <th>充值金额</th>
                  <th>充值状态</th>
                  <th>备注</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">2015-03-11 10:45:10</th>
                  <td>2,451.43</td>
                  <td>充值成功</td>
                  <td>线下充值500</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /example -->

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