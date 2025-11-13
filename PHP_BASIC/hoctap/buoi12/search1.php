<?php
$nhanvien=[
    ["ten"=>"Lê Thu Hà","MaNV"=>"NV001","luongcoban"=>6500000,"hesoluong"=>9],
    ["ten"=>"Trần Hoài An","MaNV"=>"NV002","luongcoban"=>6500000,"hesoluong"=>1],
    ["ten"=>"Nguyễn Hữu Hùng","MaNV"=>"NV003","luongcoban"=>6500000,"hesoluong"=>5],
    ["ten"=>"Nguyễn Văn Anh","MaNV"=>"NV004","luongcoban"=>6500000,"hesoluong"=>1],
    ["ten"=>"Lê Thu Huyền","MaNV"=>"NV005","luongcoban"=>6500000,"hesoluong"=>3],
];
function getluong($luongcb,$heso){
    $thuclinh=$luongcb*$heso;
    return $thuclinh;
}
function getClass($luong){
    if($luong>10000000){
        return "light";
    }else{
        return "";
    }
}
function get_search(){
    global $nhanvien;
            if(isset($_GET['btn_search'])){
                $resault=[];
                foreach($nhanvien as $nv){
                    if($nv["ten"]==$_GET['search'] || $nv["hesoluong"]==$_GET['search'] ){
                    $resault[]=$nv;
                    }
                
                }
            if(!empty($resault)){
                return $resault;
            } else{
                return $nhanvien;
            } 
            }
  return $nhanvien;
}

// Tìm kiếm theo hệ số lương

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng nhân viên</title>
    <style>
        table tr th{
            padding: 5px 20px;
            border-bottom:2px solid green;
            text-align:center;
        }
        table tr td{
            padding: 5px 20px;
            border-bottom:1px solid green;
            
        }
        .light{
            background: yellow;
        }
        form{
            margin:20;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="search">
        <input type="submit" name="btn_search" value="Tìm kiếm">
    </form>
    <h3>BẢNG NHÂN VIÊN</h3>
    <table>
        <tr>
            <th>Họ và tên</th>
            <th>Mã Nhân Viên</th>
            <th>Lương cơ bản</th>
            <th>Hệ số lương</th>
            <th>Lương thực lĩnh</th>
        </tr>
       <?php
       foreach(get_search() as $nv){
        $luong=getluong($nv['luongcoban'],$nv['hesoluong']);
        // $class=($luong>10000000)?"light":"";
        // if($luong>10000000){
        //     $class="light";
        // }else{
        //     $class="";
        // }
        $class=getClass($luong);
        
       ?>
        <tr class="<?=$class?>" >
            <td><?= $nv['ten']?></td>
            <td><?= $nv['MaNV']?></td>
            <td><?= $nv['luongcoban']?></td>
            <td><?= $nv['hesoluong']?></td>
            <td><?= $luong?></td>
        </tr>
       <?php
       }
       ?>
    </table>
</body>
</html>