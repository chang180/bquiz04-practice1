<form action="?do=bot" method="post">
    <h1 class="ct">編輯頁尾版權區</h1>
    頁尾版權內容<input id="bot" type="text" name="bottom" value="<?=$bottom['bottom'];?>"><br>
    <div class="ct"><button>編輯</button><button type="button" onclick="clearBot()">重置</button></div>
</form>
<?php
if(!empty($_POST['bottom'])) {
    $bottom['bottom']=$_POST['bottom'];
    $Bottom->save($bottom);
}
?>
<script>
    function clearBot(){
        $("#bot").val("");
    }
</script>