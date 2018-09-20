<div class='col-md-4 col-xs-12 col-sm-6' id="leftContent">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                <li class="list-group-item"><a href="./bid_request_list.php">借款项目</a></li>
                <li class="list-group-item"><a href="">还款明细</a></li>
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
                <li class="list-group-item"><a href="./perCenter.php?menuid=4">账户信息</a></li>
                <li class="list-group-item"><a href="./realAuth.php">实名认证</a></li>
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
                <li class="list-group-item"><a href="./accountflow_list.php">账户流水</a></li>
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
              <a class="collapsed" role="button"  data-parent="#accordion" href="./userInfo.php" aria-expanded="false"
                aria-controls="collapsefive">
                个人资料
              </a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script>
      $('#leftContent .panel-heading').on('click',function(){
        $('#leftContent .panel-heading').css("background","#ccc");
        $('#leftContent a.collapsed').css("color","#337ab7");
        $(this).css("background","#337ab7","color","red");
        $(this).find("a.collapsed").css("color","#fff"); 
      })
    </script>