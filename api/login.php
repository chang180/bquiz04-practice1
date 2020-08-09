<?php
include_once "../base.php";
$chk=$Member->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk>0){
    if($_POST['ans']==$_SESSION['ans']){
        $_SESSION['member']=$_POST['acc'];
        to("../index.php");
    }else{
        echo "<script>
        alert('驗證碼錯誤');
        location.href='../index.php?do=login';
        </script>";
        exit;
    }
}else{
    echo "<script>
    alert('帳號或密錯誤');
    location.href='../index.php?do=login';
    </script>";
    exit;
}