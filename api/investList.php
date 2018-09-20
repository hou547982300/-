<?php
    require_once("./setHeader.php");
    //获取数据总数量
    $sql="select * from borrowinfo";
    $result=mysqli_query($link,$sql);
    $totleNum = mysqli_num_rows($result);
   //接收分页参数
    $pageIndex=$_GET["pageIndex"];
    $pageSize=$_GET["pageSize"];
    //跳过数据
    $skipNum=$pageSize*$pageIndex; 
    $sql.=" limit $skipNum,$pageSize";
    $result=mysqli_query($link,$sql);

    $arrData =[];
    while ($rs=mysqli_fetch_assoc($result)){
        array_push($arrData,$rs);//把每一次执行的行的数据添加的数据数组里面
    }
    $result=[
        'total'=>$totleNum,
        'list'=>$arrData];
    echo json_encode($result);
    require_once('./setfoot.php'); 
?>