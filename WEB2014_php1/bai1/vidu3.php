<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $hoten = $_POST['hoten'];
        $tuoi = $_POST['tuoi'];
    if($tuoi >= 18){
        $err = "$hoten $tuoi da du tuoi vao cao dang, dai hoc";
    }else{
        $err = "$hoten $tuoi tuoi chua du vao cao dang, dai hoc";
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
            <label for="">Ho ten</label><br>
            <input type="text" name="hoten" value="<?= $hoten ?? '' ?>">
        </div>
        <div>
            <label for="">Tuoi</label><br>
            <input type="number" name="tuoi" value="<?= $tuoi ?? '' ?>">
        </div>
        <div>
            <?= $err ?? '' ?>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>