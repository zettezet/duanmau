<?php
// Khai bao va gan gia tri cho mot mang luu tru so buoi nghi hoc cua sinh vien Poly
// Xuat len trinh duyet bang danh sach du thi va bang danh sach cam thi
// Mang gom 10 sinh vien
$sinhVien = [
    'Lan' => 3,
    'Hoa' => 5,
    'An' => 7,
    'Dung' => 9,
    'Minh' => 2,
    'Linh' => 6,
    'Quang' => 8,
    'Ha' => 4,
    'Hoang' => 10,
    'Truong' => 2
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
        <style>
        table tr th{
            padding: 5px 20px;
            border-bottom: 2px solid green;
        }
        table tr td{
            padding: 5px 20px;
            border-bottom: 1px solid green;
        }
        .danhsach1 {
            text-align: center;
            color: #00fff7ff;
            font-weight: bold;
        }
        .danhsach2 {
            text-align: center;
            color: #ff0000ff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 align="center">Danh sách sinh viên</h1>
    <h2 class="danhsach1">Danh sach duoc thi</h2>
    <table align="center">
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>So buoi nghi hoc</th>
        </tr>
        <?php
        $stt = 0;
        foreach($sinhVien as $namesv=>$sobuoinghi) {
            if ($sobuoinghi <= 3) {
                $stt++;
        ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= $namesv ?></td>
                <td><?= $sobuoinghi ?></td>
            </tr>
        <?php
            }
        }
        ?>
    </table>
    <h2 class="danhsach2">Danh sach cam thi</h2>
    <table  align="center">
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>So buoi nghi hoc</th>
        </tr>
        <?php
        $stt = 0;
        foreach($sinhVien as $namesv=>$sobuoinghi) {
            if ($sobuoinghi >= 4) {
                $stt++;
        ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= $namesv ?></td>
                <td><?= $sobuoinghi ?></td>
            </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>