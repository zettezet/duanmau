<?php
session_start();
echo"Trang chu: ";
if(isset($_SESSION['user'])){
    echo "Chao: ".$_SESSION['user'];
}else{
    echo"<br>chua dang nhap";
}
?>
<a href="logout.php">Dang xuat</a>