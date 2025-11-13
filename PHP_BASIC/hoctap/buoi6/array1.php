<?php
$sv = [
    ["name" => "Ha", "MaSV" => "PH001", "DiemPhp" => 5, "DiemHtml" => 7, "DiemJS" => 8],
    ["name" => "Hoa", "MaSV" => "PH002", "DiemPhp" => 6, "DiemHtml" => 8, "DiemJS" => 9],
    ["name" => "An", "MaSV" => "PH003", "DiemPhp" => 7, "DiemHtml" => 6, "DiemJS" => 5],
    ["name" => "Dung", "MaSV" => "PH004", "DiemPhp" => 9, "DiemHtml" => 10, "DiemJS" => 8],
    ["name" => "Minh", "MaSV" => "PH005", "DiemPhp" => 2, "DiemHtml" => 3, "DiemJS" => 4]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <
</head>
<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>MaSV</th>
            <th>Diem PHP</th>
            <th>Diem HTML</th>
            <th>Diem JS</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($sv as $sinhvien) {
            $stt++;
        ?>
        <tr>
            <td><?= $stt ?></td>
            <td><?= $sinhvien['name'] ?></td>
            <td><?= $sinhvien['MaSV'] ?></td>
            <td><?= $sinhvien['DiemPhp'] ?></td>
            <td><?= $sinhvien['DiemHtml'] ?></td>
            <td><?= $sinhvien['DiemJS'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>