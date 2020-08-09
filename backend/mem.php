<h1 class="ct">會員管理</h1>
<table>
    <tr>
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <?php
    $members = $Member->all();
    foreach ($members as $m) {
    ?>
        <tr>
            <td><?= $m['name']; ?></td>
            <td><?= $m['acc']; ?></td>
            <td><?= $m['date']; ?></td>
            <td>
                <a href="?do=edit_mem&id=<?= $m['id']; ?>"><button>修改</button></a><a href="api/delmem.php?id=<?= $m['id']; ?>"><button>刪除</button></a>

            </td>
        </tr>
    <?php } ?>
</table>