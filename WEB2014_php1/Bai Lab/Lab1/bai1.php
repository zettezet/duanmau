<?php
    $tuoi = $_GET['tuoi'] ?? '';
    
    if($tuoi < 0){
        echo "Error";
    }
    elseif($tuoi >= 0 && $tuoi < 18){
        echo "Chưa đủ tuổi trưởng thành";
    }
    elseif($tuoi >= 18 && $tuoi <= 60){
        echo "Trong độ tuổi lao động";
    }
    else{
        echo "Tuổi nghỉ hưu";
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
    <form action="" method="get">
        <div>
            <label for="">Tuoi</label>
            <input type="number" name="tuoi">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>