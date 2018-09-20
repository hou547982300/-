<nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="./image/logo.png" alt=""> </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav" id="navItem">
        <li class="active">
          <a href="./index.php?menuid=1">首页</a>
        </li>
        <li>
          <a href="./invest.php?menuid=2">我要投资</a>
        </li>
        <li>
          <a href="./borrow.php?menuid=3">我要借款</a>
        </li>
        <li>
          <a href="./perCenter.php?menuid=4">个人中心</a>
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
  <!-- <script src="./lib/jquery/jquery.min.js"></script> -->
  <script>
    var c =location.href;
    console.log("网址",c);
    var menuid = c.split('=')[1]-1;
    console.log("网址",menuid);
    $("#navItem li").eq(menuid).addClass("active").siblings("li").removeClass("active");
   
  </script>