<?php
   //连接数据库
   require_once("./setHeader.php");
   $borrowType =$_POST['borrowType'];
   $borrowAmount=$_POST['borrowAmount'];
   $currentRate=$_POST['currentRate'];
   $monthes2Return=$_POST['monthes2Return'];
   $repayment=$_POST['repayment'];
   $minAmount=$_POST['minAmount'];
   $maxAmount=$_POST['maxAmount'];
   $rewardAmount=$_POST['rewardAmount'];
   $disableDays=$_POST['disableDays'];
   $borrowTitle=$_POST['borrowTitle'];
   $description=$_POST['description'];
   session_start();
   $userid= $_SESSION['userid'];
   //构建sql语句
   $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";
   $result=mysqli_query($link,$sql);
   if($result){
        $arr=["isStatus"=>true,"message"=>'借款信息添加成功'];
        echo json_encode($arr);
   }else{
        $arr=["isStatus"=>false,"message"=>'借款信息添加失败'];
        echo json_encode($arr); 
    }; 

?>