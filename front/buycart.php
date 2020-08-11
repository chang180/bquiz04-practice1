<?php
if(empty($_SESSION['member'])) to("?do=login");
?>
<style>
    .all td{
        min-width:50px;
        padding:10px;
    }
</style>
<?php

if(!empty($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}else if(!isset($_SESSION['cart'])|| empty($_SESSION['cart'])){
    echo "<h2>請選擇商品</h2>";
    exit();
}
?>
<h2 class="ct"><?=$_SESSION['member'];?>的購物車</h2>
<table class="all ct">
    <tr class="tt">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
<?php
foreach ($_SESSION['cart'] as $id=>$qt){
    $goods=$Goods->find($id);
?>
    <tr class="pp">
        <td><?=$goods['no'];?></td>
        <td><?=$goods['name'];?></td>
        <td><?=$qt;?></td>
        <td><?=$goods['stock'];?></td>
        <td><?=$goods['price'];?></td>
        <td><?=$goods['price']*$qt;?></td>
        <td>
    <a href="javascript:delCart(<?=$goods['id'];?>)"><img src="img/0415.jpg" alt=""></a>        
    </td>
    </tr>
<?php } ?>
</table>
<div class="ct">
    <a href="index.php"><img src="img/0411.jpg" alt=""></a><a href="?do=check"><img src="img/0412.jpg" alt=""></a>
</div>