<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        if ($user == "admin" && $pass == "123456") {
            $thongbao = "Đăng nhập thành công.";
        } else {
            $thongbao = "Thông tin không hợp lệ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Username:</label><br>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password:</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
    <?= $thongbao ?? '' ?>
</body>
</html>