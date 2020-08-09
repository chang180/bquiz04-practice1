<?php
$a=rand(11,99);
$b=rand(11,99);
$_SESSION['ans']=$a+$b;
?>
<h1>管理登入</h1>
<form action="api/admin.php" method="post">
帳號<input type="text" name="acc" id="acc"><br>
密碼<input type="password" name="pw" id="pw"><br>
驗證碼<span><?=$a,"+",$b,"=";?><input type="number" name="ans"></span><br>
<button>確定</button>
</form>