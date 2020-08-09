<h1 class="ct">商品分類</h1>
<form action="api/addbig.php" method="post">新增大分類<input type="text" name="big"><button>新增</button></form><br>
<form action="api/addmid.php" method="post">新增中分類<select name="parent">
        <?php
        $bigs = $Type->all(['parent' => 0]);
        foreach ($bigs as $b) {
            echo "<option value=" . $b['id'] . ">" . $b['text'] . "</option>";
        }
        ?>
    </select>
    <input type="text" name="mid"><button>新增</button></form><br>
<table>
    <?php
    $bigs = $Type->all(['parent' => 0]);
    foreach ($bigs as $b) {
    ?>
        <tr class="tt">
            <td><?= $b['text']; ?></td>
            <td>
                <a href="?do=edittype&id=<?= $b['id']; ?>">修改</a>
                <a href="api/deltype.php?id=<?= $b['id']; ?>">刪除</a>
            </td>
        </tr>
        <?php
        $mids = $Type->all(['parent' => $b['id']]);
        foreach ($mids as $m) {
        ?>
            <tr class="pp">
                <td><?= $m['text']; ?></td>
                <td>
                    <a href="?do=edittype&id=<?= $m['id']; ?>">修改</a>
                    <a href="api/deltype.php?id=<?= $m['id']; ?>">刪除</a>
                </td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
<h1 class="ct">商品管理</h1>
<div class="ct"><a href="?do=addgoods"><button>新增商品</button></a></div><br>
<table>
    <tr>
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <?php
    $goods = $Goods->all();
    foreach ($goods as $g) {
    ?>
        <form action="?do=editgoods" method="post">
            <tr>
                <td><?= $g['no']; ?></td>
                <td><?= $g['name']; ?></td>
                <td><?= $g['stock']; ?></td>
                <td><?= ($g['sh'] == 1) ? "販售中" : "已下架"; ?></td>
                <input type="hidden" name="id" value="<?= $g['id']; ?>">
                <td>
                    <button>修改</button>
                    <a href="api/delgoods.php?id=<?= $g['id']; ?>"><button type="button">刪除</button></a>
                    <a href="api/upgoods.php?id=<?= $g['id']; ?>"><button type="button">上架</button></a>
                    <a href="api/downgoods.php?id=<?= $g['id']; ?>"><button type="button">下架</button></a>
                </td>
            </tr>
        <?php } ?>
        </form>
</table>