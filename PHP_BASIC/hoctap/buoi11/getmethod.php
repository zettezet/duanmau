<?php
if(isset($_GET['btn_Search'])){
    echo"Chuỗi tìm kiếm là: ".$_GET['search'];
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
    <h3>Tìm kiếm thông tin</h3>
    <form action="" method="GET">
        <input type="text" name="search">
        <input type="submit" name="btn_Search" value="Tìm">
    </form>
</body>
</html>