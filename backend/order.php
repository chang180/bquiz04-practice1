<h1 class="ct">訂單管理</h1>
<table>
    <tr>
        <td>訂單編號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單日期</td>
        <td>操作</td>
    </tr>
    <?php
    $orders = $Ord->all();
    foreach ($orders as $m) {
    ?>
        <tr>
            <td><a href="?do=result&no=<?= $m['no']; ?>"><?= $m['no']; ?></a></td>
            <td><?= $m['total']; ?></td>
            <td><?= $m['member']; ?></td>
            <td><?= $m['name']; ?></td>
            <td><?= $m['date']; ?></td>
            <td>
                <a href="api/delord.php?id=<?= $m['id']; ?>"><button>刪除</button></a>
            </td>
        </tr>
    <?php } ?>
</table>