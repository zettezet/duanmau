<?php
    $ketqua = $_GET['ketqua'] ?? '';
    $so1 = $_GET["so1"] ?? '';
    $so2 = $_GET["so2"] ?? '';
    $pheptoan = $_GET["pheptoan"] ?? '';

    switch ($pheptoan) {
        case "+":
           $ketqua = $so1 + $so2;
            break;
        case "-":
            $ketqua = $so1 - $so2;
            break;
        case "*":
            $ketqua = $so1 * $so2;
            break;
        case "/":
            if ($so2 == 0) {
                $ketqua = "Vui lòng nhập số thứ hai khác 0";
            } else {
                $ketqua = $so1 / $so2;
            }
            break;
        default:
            $ketqua = "Phép toán không hợp lệ!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <div>
            Số thứ nhất:
            <input type="number" name="so1" value="<?= $so1 ?? '' ?>" ><br>
        </div>
        <div>
            Số thứ hai:
            <input type="number" name="so2" value="<?= $so2 ?? '' ?>"><br>
        </div>
        <div>
        Phép toán:
            <select name="pheptoan">
                <option value="+">cộng</option>
                <option value="-">trừ</option>
                <option value="*">nhân</option>
                <option value="/">chia</option>
            </select><br>
        </div>
        <div>
            <button type="submit">submit</button>
        </div>

    </form>
        <h3>Kết quả: <?= $ketqua; ?></h3>
</body>
</html>
