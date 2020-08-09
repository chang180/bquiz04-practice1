<?php
include_once "../base.php";
$mids=$Type->all(['parent'=>$_GET['id']]);
foreach ($mids as $m){
    echo "<option value=" . $m['id'] . ">" . $m['text'] . "</option>";
}