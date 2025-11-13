<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $so = $_POST["so"];

    switch ($so) {
        case 1:
            $ketqua = "Thứ Hai";
            break;
        case 2:
            $ketqua = "Thứ Ba";
            break;
        case 3:
            $ketqua = "Thứ Tư";
            break;
        case 4:
            $ketqua = "Thứ Năm";
            break;
        case 5:
            $ketqua = "Thứ Sáu";
            break;
        case 6:
            $ketqua = "Thứ Bảy";
            break;
        case 7:
            $ketqua = "Chủ Nhật";
            break;
        default:
            $ketqua = "Chỉ được nhập số từ 1 đến 7";
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
            <label for="">Nhập số từ 1 đến 7</label>
            <input type="number" name="so" min="1" max="7">
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
        <h3>Kết quả: <?= $ketqua ?? ''; ?></h3>
</body>
</html>