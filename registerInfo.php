<?php
    require('./setHeader.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql ="insert into user(username,password,phone,email) values('$username','$password','$phone','$email')";

    // $sql="insert into msitem(name,email,content) values('".$username."','".$username."','".$username."')";
    $result=mysqli_query($link,$sql);
    if($result){
        echo "数据添加成功！";
    }
    else{
        echo "数据添加失败！";
    }
    // echo $sql;
?>
