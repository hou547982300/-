<?php
    header("Content-Type:text/html;charset=utf-8");
    session_start();
    session_destroy();
    echo "<script>alert('你已成功退出系统');location.href='../Login.php';</script>";
?>