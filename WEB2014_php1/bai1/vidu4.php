<?php

// $choin = $_GET['choin'] ?? '';

// echo $choin;

// switch($choin){
//     case '' :
//         echo"Trang chu";
//         break;
//     case 'lien_he' :
//         echo "trang lien he";
//         break;
//     case 'gioi_thieu' :
//         echo"Trang gioi thieu";
//         break;
//     default:
//         echo"Trang web khong hop le ";
// }
//     function home(){
//         echo "<h1>Trang chu</h1>";
//         echo "<hr>";
//         echo "<div>Noi dung trang chu</div>";
//     }
// $message = match ($choin) {
//     '', 'home' => home(),
//     'lien_he' => "Trang lien he",
//     'gioi_thieu' => "Trang gioi thieu",
//     default => "Trang web khong hop le "
// };
// echo $message;
?>
<!-- Hay viet mot website dang ky thanh vien bao gom cac thong tin: hoten, diachi, email, sdt, mat khau.
Khi nguoi dung nhap vao thong tin neu dia chi la Ha Noi thì hiển thị khoảng cách từ vị trí shop đến Hà Nội là 30km. shop => Ninh Bình 100km, shop => Hải Phòng 110km.
Và thông tin của người đăng ký không có mật khẩu  -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $diachi = $_POST['diachi'];

    if($diachi == "HaNoi"){
        echo "khoang cach la 30km";
    }
    if($diachi == "NinhBinh"){
        echo "khoang cach la 100km";
    }
    if($diachi == "HaiPhong"){
        echo "khoang cach la 110km";
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
            <input type="text" name="hoten">
        </div>
        <div>
            <label for="">Dia chi</label><br>
            <input type="text" name="diachi">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Sdt</label><br>
            <input type="number" name="sdt">
        </div>
        <div>
            <label for="">Mat khau</label><br>
            <input type="password" name="matkhau">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>




