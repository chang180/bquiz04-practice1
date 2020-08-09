<?php
include_once "../base.php";
$Type->save(['parent'=>$_POST['parent'],'text'=>$_POST['mid']]);
to("../admin.php?do=th");