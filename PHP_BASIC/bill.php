<?php
$electricity_bills=[
    ["id" =>"1", "customer"=>"Nguyen Van A", "usage"=>"150", "month"=>"09/2025", "rate"=>"2400"],
    ["id" =>"2", "customer"=>"Nguyen Van B", "usage"=>"60", "month"=>"06/2025", "rate"=>"2400"],
    ["id" =>"3", "customer"=>"Nguyen Van C", "usage"=>"250", "month"=>"04/2025", "rate"=>"2400"],
    ["id" =>"4", "customer"=>"Nguyen Van D", "usage"=>"130", "month"=>"01/2025", "rate"=>"2400"],
    ["id" =>"5", "customer"=>"Nguyen Van E", "usage"=>"320", "month"=>"05/2025", "rate"=>"2300"]
];
function getsearch(){
    global $electricity_bills;

    if(isset($_GET['btn_search'])){
        $resault=[];
        foreach($electricity_bills as $bill){
            if(strpos($bill['customer'],$_GET['search'])!==false || strpos(substr($bill['month'],0,2), $_GET['search'])!== false){
                $resault[]= $bill;
            }
        }
        return $resault;
    }
    return $electricity_bills;
}
function tong_tien_phai_tra($usage, $rate){
    $tiendiencoban = $usage * $rate;
    if($usage >= 300){
        $tiendiencoban *= 1.2;
    }elseif($usage >= 100){
        $tiendiencoban *= 1.1;
    }elseif($usage < 100){
        $tiendiencoban *= 0.95;
    }
    return $tiendiencoban;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="search">
        <input type="submit" name="btn_search" value="Tim kiem">
    </form>
    <table border="1px">
        <tr>
            <th>Ma hoa don</th>
            <th>Ten khach hang</th>
            <th>So dien tieu thu</th>
            <th>Thang lap hoa don</th>
            <th>Don gia</th>
            <th>Tien dien co ban</th>
            <th>Tong tien phai tra</th>
        </tr>
        <?php
        foreach(getsearch() as $bill){
            $tiendiencoban = $bill['usage']*$bill['rate'];
            ?>
        <tr>
            <td><?=$bill['id']?></td>
            <td><?=$bill['customer']?></td>
            <td><?=$bill['usage']?></td>
            <td><?=$bill['month']?></td>
            <td><?=number_format($bill['rate'],0,',','.')?></td>
            <td><?=number_format($tiendiencoban,0,',','.')?></td>
            <td><?=number_format(tong_tien_phai_tra($bill['usage'], $bill['rate']),0,',','.')?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>