<form action="api/reg.php" method="post">
    <h1>會員註冊</h1>
    姓名<input type="text" name="name" id="name"><br>
    帳號<input type="text" name="acc" id="acc" required><button type="button" onclick="chkacc()">檢測帳號</button><br>
    密碼<input type="password" name="pw" id="pw" required><br>
    電話<input type="text" name="tel" id="tel"><br>
    住址<input type="text" name="addr" id="addr"><br>
    電子信箱<input type="text" name="email" id="email"><br>
    <button>註冊</button><button type="reset">重置</button>
</form>
<script>
    function chkacc() {
        $.post("api/chkacc.php", {
            "acc": $("#acc").val()
        }, function(res) {
            if (res == 1) {
                alert("帳號可用");
            } else {
                alert("帳號重複");
                $("#acc").val("");
            }
        })
    }
</script>