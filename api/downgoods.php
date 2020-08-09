<?php
include_once "../base.php";
$Goods->save(['id'=>$_GET['id'],'sh'=>0]);
to("../admin.php?do=th");