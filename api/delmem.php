<?php
include_once "../base.php";
$Member->del(['id'=>$_GET['id']]);
to("../admin.php?do=mem");