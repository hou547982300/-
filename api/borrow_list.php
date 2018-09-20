<?php
    require_once("./setHeader.php");
    session_start();
    $userid= $_SESSION['userid'];
    $sql="select * from borrowinfo where userid=$userid";
    $result=mysqli_query($link,$sql);
    $arrData =[];
    while ($rs=mysqli_fetch_assoc($result)){
        array_push($arrData,$rs);//把每一次执行的行的数据添加的数据数组里面
    }
    
    echo json_encode($arrData);
    require_once('./setfoot.php'); 

?>