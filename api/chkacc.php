<?php
include_once "../base.php";
$chk=$Member->find(['acc'=>$_POST['acc']]);
if(empty($chk)) echo 1;
else echo 0;