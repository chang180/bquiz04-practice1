<form action="api/saveadmin.php" method="post">
    <h1 class="ct">新增管理員帳號</h1>
    <table>
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td>權限</td>
            <td>
                <input type="checkbox" name="pr[]" value="1">商品分類與管理<br>
                <input type="checkbox" name="pr[]" value="2">訂單管理<br>
                <input type="checkbox" name="pr[]" value="3">會員管理<br>
                <input type="checkbox" name="pr[]" value="4">頁尾版權區管理<br>
                <input type="checkbox" name="pr[]" value="5">最新消息管理
            </td>
        </tr>
    </table>
    <div class="ct"><button>新增</button><button>重置</button></div>
</form>
