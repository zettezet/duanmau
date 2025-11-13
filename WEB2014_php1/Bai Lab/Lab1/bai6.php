<?php
    $error = "";
    $zzz = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $doituong = $_POST['doituong'];
        $soluong = (int)$_POST['soluong'];
    }
    if($soluong <= 0){
        $error = "Loi khong hop le";
    }
    else{
            switch($doituong){
            case "1":
                $tien = 100000;
                break;
            case "2":
                $tien = 50000;
                break;
            case "3":
                $tien = 70000;
                break;
            default :
                $tien = 0;
        }
        $tong = $tien * $soluong;

        $zzz = number_format($tong)."VND";
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
        <select name="doituong" id="">
            <option value="1">Người lớn-100k</option>
            <option value="2">Trẻ em-50k</option>
            <option value="3">Sinh viên-70k</option>
        </select>
        <div>
            <label for="">số lượng</label><br>
            <input type="number" name="soluong">
        </div>
        <button type="submit">submit</button>
    </form>
    <?= $zzz ?>
</body>
</html>