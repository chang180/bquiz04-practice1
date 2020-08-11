<?php

$goods = $Goods->find($_GET['id']);
?>
<h1 class="ct"><?= $goods['name']; ?></h1>
<div class="contain" style="display:flex">
    <div><img src="img/<?= $goods['img']; ?>" style="width:400px"></div>
    <div>
        <p>商品名稱<?= $goods['name']; ?></p>
        <p>分類<?= $goods['big']; ?>,">",$goods['mid'];</p>
        <p>編號<?= $goods['no']; ?></p>
        <p>價格<?= $goods['price']; ?></p>
        <p>詳細說明<?= nl2br($goods['intro']); ?></p>
        <p>庫存量<?= $goods['stock']; ?></p>
    </div>
</div>
<div class="ct">購買數量<input type="number" name="qt" id="qt"><a href="javascript:buy()"><img src="img/0402.jpg"></a></div>
<input type="hidden" name="qt" id="id" value="<?=$goods['id'];?>">
<div class="ct"><a href="index.php"><button>返回</button></a></div>

<script>
    function buy(){
        let id=$("#id").val();
        let qt=$("#qt").val();
        location.href=`?do=buycart&id=${id}&qt=${qt}`;
    }
</script>
