<?php
include_once "../base.php";
$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk>0){
    if($_POST['ans']==$_SESSION['ans']){
        $_SESSION['admin']=$_POST['acc'];
        to("../admin.php");
    }else{
        echo "<script>
        alert('對不起，您輸入的驗證碼有誤\n請您重新登入');
        location.href='../index.php?do=admin';
        </script>";
        exit;
    }
}else{
    echo "<script>
    alert('帳號或密錯誤');
    location.href='../index.php?do=admin';
    </script>";
    exit;
}