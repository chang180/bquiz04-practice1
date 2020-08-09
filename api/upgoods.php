<?php
include_once "../base.php";
$Goods->save(['id'=>$_GET['id'],'sh'=>1]);
to("../admin.php?do=th");