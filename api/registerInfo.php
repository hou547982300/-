<?php
    require('./setHeader.php');
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql ="insert into userinfo(username,password,phone,email) values('$username','$password','$phone','$email')";
    $result=mysqli_query($link,$sql);
    if($result){
        $arr = ["isStatus"=>true,"message"=>'注册成功!'];
        echo json_encode($arr);
    }
    else{
        $arr=["isStatus"=>false,"message"=>'注册失败!'];
        echo json_encode($arr);
    }
    require('./setfoot.php');
?>
