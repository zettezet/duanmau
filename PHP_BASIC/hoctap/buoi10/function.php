<?php
$nhanvien=[
    ["ten"=>"Le Thu Ha", "MaNV"=>"NV001", "luongcoban"=>6500000, "hesoluong"=>4],
    ["ten"=>"Tran Hoai An", "MaNV"=>"NV002", "luongcoban"=>650000, "hesoluong"=>2],
    ["ten"=>"NGuyen Huu Hung", "MaNV"=>"NV003", "luongcoban"=>6500000, "hesoluong"=>5],
    ["ten"=>"Nguyen Van Anh", "MaNV"=>"NV004", "luongcoban"=>650000, "hesoluong"=>3],
    ["ten"=>"Le Thu Huyen", "MaNV"=>"NV005", "luongcoban"=>6500000, "hesoluong"=>5]
];
function getluong($luongcb, $heso){
$thuclinh=$luongcb*$heso;
return $thuclinh;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang Nhan Vien</title>
    <style>
        h2{
          text-align: center;  
        }
        table tr th{
            padding: 5px 20px;
            border-bottom: 2px solid green;
        }
        table tr td{
            padding: 5px 20px;
            border-bottom: 1px solid green;
        }
        .light{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h2>Bang Nhan Vien</h2>
    <table align="center">
        <tr>
            <th>Ho va ten</th>
            <th>Ma nhan vien</th>
            <th>Luong co ban</th>
            <th>He so luong</th>
            <th>Luong thuc linh</th>
        </tr>
        <?php
        foreach($nhanvien as $nv){
            $luong= getluong($nv["luongcoban"], $nv["hesoluong"]);
            $class=($luong>10000000)?"light":"";
            ?>
            <tr class="<?=$class?>">
            <td><?=$nv["ten"]?></td>    
            <td><?=$nv["MaNV"]?></td>
            <td><?=$nv["luongcoban"]?></td>
            <td><?=$nv["hesoluong"]?></td>
            <td><?=$luong?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>