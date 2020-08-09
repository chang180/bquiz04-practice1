<form action="api/addgoods.php" method="post" enctype="multipart/form-data">
    <h1 class="ct">新增商品</h1>
    所屬大分類<select name="big" class="big">
        <?php
        $bigs = $Type->all(['parent' => 0]);
        foreach ($bigs as $b) {
            echo "<option value=" . $b['id'] . ">" . $b['text'] . "</option>";
        }
        ?>
    </select><br>
    所屬中分類<select name="mid" class="mid">
    </select><br>
    商品編號<span class="no">(完成分類後自動分配)</span><br>
    商品名稱<input type="text" name="name" id="name"><br>
    商品價格<input type="number" name="price" id="price"><br>
    規格<input type="text" name="spec" id="spec"><br>
    庫存量<input type="number" name="stock" id="stock"><br>
    商品圖片<input type="file" name="img" id="img"><br>
商品介紹<textarea name="intro" id="intro" cols="60" rows="10"></textarea><br>
<div class="ct">
    <button>新增</button>
    <button type="reset">重置</button>
    <a href="?do=th"><button type="button">返回</button></a>
</div>

</form>


<script>
    $.get("api/getmid.php", {
        "id": $(".big option:selected").val()
    }, function(res) {
        // console.log(res);
        $(".mid").html(res);
    })

    $(".big").on("change", function() {
        $.get("api/getmid.php", {
            "id": $(".big option:selected").val()
        }, function(res) {
            $(".mid").html(res);
        })
    })
</script>