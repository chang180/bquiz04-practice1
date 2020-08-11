<h2 class="ct">填寫資料</h2>
<?php

$mem=$Member->find(['acc'=>$_SESSION['member']]);
?>
<table class="all">
    <tr>
        <td>登入帳號</td>
        <td><?=$_SESSION['member'];?></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="name" id="name" value="<?=$mem['name'];?>"></td>
    </tr>
    <tr>
        <td>電子信箱</td>
        <td><input type="text" name="email" id="email" value="<?=$mem['email'];?>"></td>
    </tr>
    <tr>
        <td>地址</td>
        <td><input type="text" name="addr" id="addr" value="<?=$mem['addr'];?>"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="tel" id="tel" value="<?=$mem['tel'];?>"></td>
    </tr>
</table>
<table class="all">
    <tr class="tt">
        <td class="ct">商品名稱</td>
        <td class="ct">編號</td>
        <td class="ct">數量</td>
        <td class="ct">單價</td>
        <td class="ct">小計</td>
    </tr>
<?php
$sum=0;
foreach($_SESSION['cart'] as $goods=>$qt){
    $g=$Goods->find($goods);
?>
    <tr class="pp">
        <td><?=$g['name'];?></td>
        <td><?=$g['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$g['price'];?></td>
        <td><?=$g['price']*$qt;?></td>
    </tr>
<?php 
$sum=$sum+($g['price']*$qt);
}?>
<tr>
    <td colspan='5'><?=$sum;?></td>
</tr>
</table>
<div class="ct">
    <button onclick="buy()">確定送出</button>
    <button onclick="location.href='?do=buycart'">返回修改訂單</button>
</div>

<script>
    function buy(){
        let data=$("input").serialize();
$.post("api/buy.php",data,function(){
    alert("訂購成功\n感謝您的選購");
    location.href="index.php";
})
    }
</script>