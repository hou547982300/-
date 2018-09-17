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
        <div class="panel panel-default" id="borrow_apply">
            <div class="header">
                <h3>信用借款</h3>
                <div>
                <p><span>信用额度:</span><i>2000</i> <span>可用金额:</span><i>2000</i></p>
                </div>
            </div>
            <div class="panel-heading">
             <span>借款消息</span><span>信用标</span>
          </div>
            <div class="panel-body row">
              <div class="col-md-6 col-xs-12 ">
              <form class="form-inline">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款金额</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" id="exampleInputAmount" >
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
                <!-- 利息 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款利息</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" id="exampleInputAmount" >
                    <div class="input-group-addon">%</div>
                  </div>
                </div>
                <!-- 期限 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款期限</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <select name="" class="form-control" id="exampleInputAmount" style="padding-left:150px;">
                      <option value="1">1</option>
                      <option value="3">3</option>
                      <option value="6">6</option>
                      <option value="9">9</option>
                      <option value="12">12</option>
                    </select>
                    <div class="input-group-addon">月</div>
                  </div>
                </div>
                <!-- 还款方式 -->
                <div class="form-group" style="width:90%">
                  <label for="inputEmail3" class="col-sm-3  col-xs-12">还款方式</label>
                  <div class="input-group col-sm-9 col-xs-12" style="line-height:34px;text-align:left;" >
                    <input type="checkbox" name="pay" id=""  >按月分期
                    <input type="checkbox" name="pay" id="" style="margin-left:30px">按月到期
                  </div>
                </div>
                <!-- 最小投标 -->
                <div class="form-group" >
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">最小投标</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" id="exampleInputAmount" >
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
                <!-- 投标奖金 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">投标奖金</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" id="exampleInputAmount" >
                    <div class="input-group-addon">%</div>
                  </div>
                </div>
                <!-- 招标天数 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">招标天数</label>
                <div class="input-group col-sm-9 col-xs-12">
                    <select name="" class="form-control" id="exampleInputAmount" style="padding-left:150px;">
                      <option value="1">1</option>
                      <option value="3">3</option>
                      <option value="6">6</option>
                      <option value="9">9</option>
                      <option value="12">12</option>
                    </select>
                    <div class="input-group-addon">月</div>
                  </div>
                </div>
                <!-- 借款标题 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款标题</label>
                  <div class="input-group col-sm-9">
                    <input type="text" class="form-control" id="exampleInputAmount" >
                    <div class="input-group-addon" style="background:none;border:none"></div>
                </div>
                  
                </div>
                <!-- 借款描述 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="padding-right:0">借款描述</label>
                  <div class="input-group col-sm-8">
                      <textarea name="" id="" cols="50" rows="3" class="form-control" ></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">提交申请</button>
              </form>
              </div>
              <div class="col-md-4 col-xs-10" id="borrow_appy_about">
                  <h4>相关费用</h4>
                  <p>利息<span>--</span></p>
                  <p>奖金<span>--</span></p>
                  <p>管理费<span>--</span></p>
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
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>