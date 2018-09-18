<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P-个人中心</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
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
              <form class="form-inline" id="borrow_apply">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款金额</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control"   name="bidRequestAmount" >
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
                <!-- 借款类型 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款类型</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <select id="bidRequeststyle" name="bidRequeststyle" class="form-control"  style="padding-left:140px;padding-right:30px;text-align:center">
                      <option value="1">信用贷</option>
                      <option value="2">车易贷</option>
                      <option value="3">房易贷</option>
                    </select>
                  </div>
                </div>
                <!-- 利息 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款利息</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" name="currentRate" >
                    <div class="input-group-addon">%</div>
                  </div>
                </div>
                <!-- 期限 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">借款期限</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <select name="monthes2Return" class="form-control"  style="padding-left:150px;">
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
                    <input type="radio" name="inlineRadioOptions"  id=""  >按月分期
                    <input type="radio" name="inlineRadioOptions"  id="" style="margin-left:30px">按月到期
                  </div>
                </div>
                <!-- 最小投标 -->
                <div class="form-group" >
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">最小投标</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" name="minBidAmount" >
                    <div class="input-group-addon">元</div>
                  </div>
                </div>
                <!-- 投标奖金 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">投标奖金</label>
                  <div class="input-group col-sm-9 col-xs-12">
                    <input type="text" class="form-control" name="totalRewardAmount"  >
                    <div class="input-group-addon">%</div>
                  </div>
                </div>
                <!-- 招标天数 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-xs-12 control-label">招标天数</label>
                <div class="input-group col-sm-9 col-xs-12">
                    <select name="disableDays" class="form-control"  style="padding-left:150px;">
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
                    <input type="text" class="form-control" name="title"  >
                    <div class="input-group-addon" style="background:none;border:none"></div>
                </div>
                  
                </div>
                <!-- 借款描述 -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="padding-right:0">借款描述</label>
                  <div class="input-group col-sm-8">
                      <textarea name="description" id="" cols="50" rows="3" class="form-control" ></textarea>
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
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <script src="./dist/js/borrow_apply.min.js"></script>
</body>
</html>