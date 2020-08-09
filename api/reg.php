<?php
include_once "../base.php";
$chk=$Member->find(['acc'=>$_POST['acc']]);
if(!empty($chk)){
    to("../index.php");
    exit;
};

$Member->save($_POST);
to("../index.php");