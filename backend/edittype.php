<form action="api/edittype.php" method="post">
<h1 class="ct">修改分類</h1>
<?php
$type=$Type->find($_GET['id']);
?>
名稱<input type="text" name="text" value="<?=$type['text'];?>">
<input type="hidden" name="id" value="<?=$type['id'];?>">
<button>確定修改</button>
</form>