<?php
    session_start(); //一定要开启，否则无法取到值
    if(isset($_SESSION["username"])){
        $username=$_SESSION["username"];
        $userid=$_SESSION["userid"];
        $result=["Loginstatus"=>true,"username"=>$username,"userid"=>$userid];
        echo json_encode($result);
    }else{
        $result= ["Loginstatus"=>false,"msg"=>"用户还未登陆,请登录后再操作"];
        echo json_encode($result);
    }
?>