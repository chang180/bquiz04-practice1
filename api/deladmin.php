<?php
include_once "../base.php";
$Admin->del(['id'=>$_GET['id']]);
to("../admin.php?do=admin");