<?php
    if(isset($_GET['hoten'])){
        $hoten = $_GET['hoten'];
        $tuoi = $_GET['tuoi'];
    }
    if($tuoi < 18){
        echo"ban chua du tuoi";
    }
    else{
        echo"ban da du tuoi";
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
            <label for="">Ho ten</label><br>
            <input type="text" name="hoten">
        </div>
        <div>
            <label for="">Tuoi</label><br>
            <input type="text" name="tuoi">
        </div>
        <div>
            <button type="submit">Gui</button>
        </div>
    </form>
</body>
</html>