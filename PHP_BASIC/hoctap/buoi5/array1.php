<?php
$diems=['Ha'=>4, 'Hoa'=>9, 'Lan'=>2, 'Minh'=>9, 'An'=>7];
// Dua ra man hinh tong so sinh vien dc diem 9
$dem =0;
// foreach($diems as $diem) {
//     if ($diem == 9) {
//         $dem++;
//     }
// }
// echo " Tong so sinh vien dat diem 9 la: $dem";
// =========Dua ra man hinh ten cua nhung sinh vien dat diem 9======
// foreach($diems as $name=>$diem) {
//     if ($diem == 9) {
//         echo " Nhung ten sinh vien dat diem 9 la: $name<br>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien dat diem 9</title>
    <style>
        table tr th{
            padding: 5px 20px;
            border-bottom: 2px solid green;
        }
        table tr td{
            padding: 5px 20px;
            border-bottom: 1px solid green;
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên đạt điểm 9</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên</th>
        </tr>
        <?php
        foreach($diems as $name=>$diem) {
            if ($diem == 9) {
                $dem++;
        ?>
            <tr>
                <td><?= $dem ?></td>
                <td><?= $name ?></td>
            </tr>
        <?php
            }
        }
        ?>
</body>
</html>