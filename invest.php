<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P2P-我要投资</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <script src="./dist/js/checkIsLogin.min.js"></script>
    <style>
        body {
            font-family: 'Microsoft YaHei';
        }
        #page{
             margin-left:50px;   
            }
    </style>
</head>
<body>
    <?php
    require("./header.php");
        ?>
    <!-- 自定义内容区 -->
    <div class="container" id="investor">
        <h3>投资列表</h3>
        <div class="projectStatus">标的状态
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default">全部</button>
                <button type="button" class="btn btn-default">招标中</button>
                <button type="button" class="btn btn-default">还款中</button>
            </div>
        </div>
        <div class="bs-example" data-example-id="hoverable-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>借款人</th>
                    <th>借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>还款方式</th>
                    <th>还款期限</th>
                    <th>操作</th>
                    </tr>
                </thead>
                <tbody id="investList">
                </tbody>
            </table>
                <div id="page" class="m-pagination"></div>
        </div>
    </div>
   
    <!-- 页脚 -->
    <?php
        require("./footer.php");
    ?>
     <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
     <script id="investListTmpl" type="text/html" >
          <tr>
            <th scope="row">zs</th>
            <td>${borrowTitle}</td>
            <td>${currentRate}%</td>
            <td>${borrowAmount}元</td>
            <td>${repayment}</td>
            <td>${monthes2Return}</td>
            <td>
                <button type="button" class="btn btn-danger">查看</button>
            </td>
          </tr>
  </script> 
  <script src="./dist/js/invest.min.js"></script>
</body>
</html>
