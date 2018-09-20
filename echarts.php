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
                <div id="myECharts" style="width:100%;height:500px;">
                </div>
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
  <script src="./lib/echarts/echarts-all.js"></script>
  <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('myECharts'));
        // 指定图表的配置项和数据
        var option = {
            title : {
                text: 'p2p个人借贷分析图',
                x:'left'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                right: 'left',
                data: []
            },
            series : [
                {
                    name: '访问来源', 
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '60%'],
                    data:[],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    <script src="./dist/js/echarts.min.js"></script> 
</body>

</html>