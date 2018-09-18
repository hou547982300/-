<!-- 页头 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P2P-我要借款</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checkIsLogin.min.js"></script>
</head>

<body>
    <?php
        require("./header.php");
    ?>

    <!-- 自定义内容区 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading fristhead">
                        <h3 class="panel-title">信用贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可用金额&yen;2,000.00 </p>
                        <a href="">申请条件</a>
                        <dl>
                            <dt>仅限成都地区</dt>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 填写基本资料</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 身份认证</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 视频认证</dd>
                        </dl>
                        <button type="button" class="btn btn-info"><a href="./borrow_apply.php?applyNum=1">立即申请</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading secondhead">
                        <h3 class="panel-title">车易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可用金额&yen;2,000.00 </p>
                        <a href="">申请条件</a>
                        <dl>
                            <dt>仅限成都地区</dt>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 填写基本资料</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 身份认证</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 视频认证</dd>
                        </dl>
                        <button type="button" class="btn btn-info"><a href="./borrow_apply.php?applyNum=2">立即申请</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading thirdhead">
                        <h3 class="panel-title">房易贷</h3>
                    </div>
                    <div class="panel-body">
                        <p>可用金额&yen;2,000.00 </p>
                        <a href="">申请条件</a>
                        <dl>
                            <dt>仅限成都地区</dt>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 填写基本资料</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 身份认证</dd>
                            <dd>
                                <img src="./image/sequare.png" alt=""> 视频认证</dd>
                        </dl>
                        <button type="button" class="btn btn-info"><a href="./borrow_apply.php?applyNum=3">立即申请</a></button>
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