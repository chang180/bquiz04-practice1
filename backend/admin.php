<a href="?do=add_admin"><button>新增管理員</button></a>
<table>
    <tr>
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
    <?php
$admins=$Admin->all();
foreach ($admins as $a){
    ?>
    <tr>
        <td><?=$a['acc'];?></td>
        <td><?=$a['acc'];?></td>
        <td>
<?php
if($a['acc']=='admin') echo "此帳號為最高管理權限";
else {
    ?>
    <a href="?do=edit_admin&id=<?=$a['id'];?>"><button>管理</button></a><a href="api/deladmin.php?id=<?=$a['id'];?>"><button>刪除</button></a>
    <?php
}
?>
        </td>
    </tr>
<?php } ?>
</table>