<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gửi dữ liệu lên sever bằng phương thức POST</title>
    <style>
        .formcontrol{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h3>POSST METHOD</h3>
    <form action="methoProcess.php" method="POST">
        <div class="formcontrol">
        <label for="">Username</label>
        <input type="text" name="user">
        </div>
    <div class="formcontrol">
        <label for="">Password</label>
        <input type="text" name="pass">
    </div>
    <div class="formcontrol">
        <input type="submit" name="btn_login" value="Đăng nhập">
    </div>
    </form>
</body>
</html>