<?php
    require('./setHeader.php');
    $username = $_POST['username'];
    $password = md5($_POST['password']) ;
   //查询数据库中用户名
    $sql ="select * from userinfo where username ='".$username."'and password='".$password."'";
    $result=mysqli_query($link,$sql);
    $rs=mysqli_fetch_assoc($result);
    if($rs){
        $arr = ["isStatus"=>true,"message"=>'登录成功!'];
        echo json_encode($arr);
    }
    else{
        $arr=["isStatus"=>false,"message"=>'用户名或密码输入错误'];
        echo json_encode($arr);
    }; 
      require('./setfoot.php');
?>
