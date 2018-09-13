<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>首页</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>
  <!-- 头部导航 -->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <span class="glyphicon glyphicon-phone-alt"></span> 028-86261949</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">首页</a>
          </li>
          <li>
            <a href="#">小强</a>
          </li>
          <li>
            <a href="#">注销</a>
          </li>
          <li>
            <a href="#">帮助</a>
          </li>
          <li>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-html='true' title="<img src='./image/wx.jpg'>">联系客服</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



  <!-- 下部导航 -->
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="./image/logo.png" alt=""> </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">首页
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li>
          <a href="#">我要投资</a>
        </li>
        <li>
          <a href="#">我要借款</a>
        </li>
        <li>
          <a href="#">新手指引</a>
        </li>
        <li>
          <a href="#">关于我们</a>
        </li>
      </ul>

    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- 轮播图 -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <!-- 操作 -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./image/banner01.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./image/banner02.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <!-- 图片 -->
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- 三大板块 -->
  <div class="container feature">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div>
          <h3>投资理财</h3>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 借款 -->
  <div class="container BorrowMoney">
    <h2>进行中的借款</h2>
    <a href="" class="pull-right">进入投资列表</a>
    <hr>
    <table class="table table-hover container">
      <thead>
        <tr>
          <th>借款人</th>
          <th>借款标题</th>
          <th>年利率</th>
          <th></th>
          <th>还款方式</th>
          <th>进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>张三</td>
          <td>给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td>按月分期还款</td>
          <td>78.00%</td>
          <td>
            <button>查看</button>
          </td>
        </tr>
        <tr>
          <td>王五</td>
          <td>江湖救急，借100吃饭</td>
          <td>12.00%</td>
          <td>100.00</td>
          <td>按月到期还款</td>
          <td>100.00%</td>
          <td>
            <button>查看</button>
          </td>
        </tr>
        <tr>
          <td>赵柳</td>
          <td>江湖救急，借100吃饭</td>
          <td>12.00%</td>
          <td>100.00</td>
          <td>按月到期还款</td>
          <td>100.00%</td>
          <td>
            <button>查看</button>
          </td>
        </tr>


      </tbody>
    </table>
  </div>

  <!-- 资讯 -->
  <div class="container">
    <div class="row message">
      <div class="col-xs-12 col-sm-6 ">
        <h2>企业最新咨询</h2>
        <a href="" class="pull-right">更多咨询</a>
        <hr>
        <table class="table table-hover container">
          <tbody>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-6 ">
        <h2>用户反馈</h2>
        <a href="" class="pull-right">更多咨询</a>
        <hr>
        <table class="table table-hover container">
          <tbody>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row message">
      <div class="col-xs-12 col-sm-6 ">
        <h2>理财经验</h2>
        <a href="" class="pull-right">更多咨询</a>
        <hr>
        <table class="table table-hover container">
          <tbody>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-6 ">
        <h2>活动分享</h2>
        <a href="" class="pull-right">更多咨询</a>
        <hr>
        <table class="table table-hover container">
          <tbody>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>
            <tr>
              <a href="">
                <td>央视力挺互联网金融发表日期：</td>
                <td>2015-03-23</td>
              </a>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- 页脚 -->
  <div class="container footer">
    <div class="row">
      <div class="col-xs-12 col-sm-8 ">
        <div class="panel panel-default">
          <div class="panel-body">
            版权所有： 2006-2015成都源代码教育咨询有限公司
          </div>
          <div class="panel-body">
            地  址： 成都市高新区府城大道西段399号天府新谷1号楼620-625
          </div>
          <div class="panel-body">
            电  话： 028-86261949 / 400-808-6840  邮箱： yuandaima@itsource.cn
          </div>
          <div class="panel-body">
            <a href="">蜀ICP备14030149号-1</a>
            <a href="">蜀公网安备510114990541</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-2 ">
        <p>官场微博:</p>
        <img src="./image/tecent.png">
        <img src="./image/sina.png">
      </div>
      <div class="col-xs-12 col-sm-2 ">
        <p>官场微信:</p>
        <img src="./image/wx.jpg">
      </div>
    </div>

  </div>

  </div>












  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./dist/js/index.min.js"></script>
</body>

</html>