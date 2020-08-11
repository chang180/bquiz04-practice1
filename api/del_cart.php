<?php include_once "../base.php";

$type=$Type->find($_POST['id']);
$type['name']=$_POST['newName'];
$tye->save($type);