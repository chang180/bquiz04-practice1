<form action="api/saveadmin.php" method="post">
    <h1 class="ct">修改管理員權限</h1>
    <?php
$row=$Admin->find($_GET['id']);
$pr=unserialize($row['pr'])??[];
    ?>
    <table>
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" value="<?=$row['acc'];?>"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" value="<?=$row['pw'];?>"></td>
        </tr>
        <tr>
            <td>權限</td>
            <td>
                <input type="checkbox" name="pr[]" value="1" <?=in_array(1,$pr)?"checked":"";?>>商品分類與管理<br>
                <input type="checkbox" name="pr[]" value="2" <?=in_array(2,$pr)?"checked":"";?>>訂單管理<br>
                <input type="checkbox" name="pr[]" value="3" <?=in_array(3,$pr)?"checked":"";?>>會員管理<br>
                <input type="checkbox" name="pr[]" value="4" <?=in_array(4,$pr)?"checked":"";?>>頁尾版權區管理<br>
                <input type="checkbox" name="pr[]" value="5" <?=in_array(5,$pr)?"checked":"";?>>最新消息管理
            </td>
        </tr>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    </table>
    <div class="ct"><button>修改</button><button>重置</button></div>
</form>
