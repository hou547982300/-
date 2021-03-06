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
            <div class="panel-heading">借款项目</div>
            <div class="panel-body">
            <div class="bs-example" data-example-id="hoverable-table">
      <table class="table table-hover" id="bid_request_list" >
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
        <tbody id="bidrequestlist">
         
       
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
  <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 定义模板： 用户渲染数据 -->
  <script id="borrowTmpl" type="text/html" >
          <tr>
            <td>江湖救急信</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}元</td>
            <td>${monthes2Return}月</td>
            <td>${currentRate}%</td>
            <td>招标拒绝</td>
          </tr>
  </script> 
  <script src="./dist/js/bid_request_list.min.js"></script> 
</body>

</html>