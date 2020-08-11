<?php
$type = $_GET['type'] ?? "0";
if (empty($type)) {
    $goods = $Goods->all(['sh' => 1]);
    $nav = "全部商品";
} else {
    $tt = $Type->find($type);
    if ($tt['parent'] == 0) {
        $goods = $Goods->all(['sh'=>1, 'big' => $type]);
        $nav = $tt['text'];
    } else {
        $goods = $Goods->all(['sh' => 1, 'mid' => $type]);
        $bb = $Type->find($tt['parent']);
        $nav = $bb['text'] . " > " . $tt['text'];
    }
}
?>
<h1><?= $nav; ?></h1>
<?php
foreach ($goods as $g) {
?>
    <div class="contain" style="display:flex">
        <div>
            <a href="?do=detail&id=<?= $g['id']; ?>"><img src="img/<?= $g['img']; ?>" style='width:80px'></a></div>
        <div>
            <p>商品名稱：<?=$g['name'];?></p>
            <p>價錢：<?=$g['price'];?></p>
            <p>規格：<?=$g['spec'];?></p>
            <p>簡介：<?=mb_substr($g['intro'],0,25,'utf8');?></p>
            <a href="javascript:goCart(<?=$g['id'];?>)"><button>我要購買</button></a>
        </div>
    </div>
    <hr>
<?php } ?>
<script>
    refreshCart();
    function goCart(id){
$.post("api/add_to_cart.php",{id,'qt':1},function(){
    refreshCart();
})
    }

    function refreshCart(){
        $.get("api/update_cart.php",function(res){
            if(res){
                $("#cart").show();
                let cart=JSON.parse(res);
                $("#cart").html(cart.sum+"<br>"+cart.items)
            }else{
                $("#cart").hide();
            }
        })
    }
</script>