<?php
    require_once("./setHeader.php");
    session_start();
    $userid= $_SESSION['userid'];
    $sql="select * from borrowinfo where userid=$userid";
    $result=mysqli_query($link,$sql);
    $data=[
        ["value"=>0, "name"=>'信用贷'],
        ["value"=>0, "name"=>'车易贷'],
        ["value"=>0, "name"=>'房易贷'],  
    ];
        // <option value="1">信用贷</option>
        // <option value="2">车易贷</option>
        // <option value="3">房易贷</option>
    while ($rs=mysqli_fetch_assoc($result)){
        if($rs["borrowType"]=='1'){
            $data[0]["value"]+=$rs["borrowAmount"];
        }
        else if($rs["borrowType"]=='2'){
            $data[1]["value"]+=$rs["borrowAmount"];
        }
        else if($rs["borrowType"]=='3'){
        $data[2]["value"]+=$rs["borrowAmount"];
        }
    }
    $result=[
        "title"=>['房易贷','车易贷','信用贷'],
        "data"=>$data
    ];
    echo json_encode($result);
    require_once('./setfoot.php'); 

?>