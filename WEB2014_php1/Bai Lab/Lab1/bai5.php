<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $so = $_POST["so"];

        $ketqua = match($so) {
            '1' => "Ngày làm việc",
            '2' => "Ngày làm việc",
            '3' => "Ngày làm việc",
            '4' => "Ngày làm việc",
            '5' => "Ngày làm việc",
            '6' => "Thứ Bảy - Ngày nghỉ",
            '7' => "Chủ Nhật - Ngày nghỉ",
            default => "Chỉ được nhập số từ 1 đến 7"
        };
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
            <label for="">Nhập số từ 1 đến 7</label>
            <input type="text" name="so" min="1" max="7">
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
    <?= $ketqua ?? ''; ?>
</body>
</html>
