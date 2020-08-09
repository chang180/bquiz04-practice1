<?php
include_once "../base.php";
$Type->save(['parent'=>0,'text'=>$_POST['big']]);
to("../admin.php?do=th");