<?php
// =====Mang hai chieu=====
$students = [
    ['name'=>"Ha", 'MaSV'=>"PH001", 'diemPhp'=>5, 'diemHtml'=>7, 'diemJs'=>8],
    ['name'=>"Hoa", 'MaSV'=>"PH002", 'diemPhp'=>6, 'diemHtml'=>8, 'diemJs'=>9],
    ['name'=>"An", 'MaSV'=>"PH003", 'diemPhp'=>7, 'diemHtml'=>6, 'diemJs'=>5],
    ['name'=>"Dung", 'MaSV'=>"PH004", 'diemPhp'=>9, 'diemHtml'=>10, 'diemJs'=>8],
    ['name'=>"Minh", 'MaSV'=>"PH005", 'diemPhp'=>2, 'diemHtml'=>3, 'diemJs'=>4],
    ['name'=>"Linh", 'MaSV'=>"PH006", 'diemPhp'=>6, 'diemHtml'=>5, 'diemJs'=>7],
    ['name'=>"Quang", 'MaSV'=>"PH007", 'diemPhp'=>8, 'diemHtml'=>9, 'diemJs'=>10],
    ['name'=>"Hoang", 'MaSV'=>"PH008", 'diemPhp'=>10, 'diemHtml'=>9, 'diemJs'=>8],
    ['name'=>"Truong", 'MaSV'=>"PH009", 'diemPhp'=>2, 'diemHtml'=>3, 'diemJs'=>4]
];
// Xuat mang students len trinh duyet
echo "<pre>";
    print_r($students);
echo "</pre>";
// Hien thi thong tin sinh vien thu 3 trong danh sach
echo "<pre>";
    print_r($students[2]);
echo "</pre>";
// hien thi ten cua sinh vien thu 3 trong danh sach
echo "Ten cua sinh vien thu 3 la: " .$students[2]['name'];
// Hien thi tong diem php cua sinh vien
$tongDiemPhp = 0;
$tongPhp = 0;
echo "<br>========Tong diem PHP========<br>";
// Cach 1
foreach ($students as $student) {
    $tongDiemPhp += $student['diemPhp'];
}
echo "Tong diem PHP cua tat ca sinh vien la: $tongDiemPhp<br>";
// Cach 2
foreach($students as $stu){
    $tongPhp = $tongPhp + $stu['diemPhp'];
}
echo "Tong diem PHP la: $tongPhp<br>";

$max=$students[0]['diemPhp'];
$name=$students[0]['name']; 
echo "<br>========Ten cua sinh vien co diem Php cao nhat========<br>";
foreach ($students as $stu){
    if ($stu['diemPhp'] > $max) {
        $max = $stu['diemPhp'];
        $name = $stu['name'];
    }
}
echo "Sinh vien <b> $name </b> co diem PHP cao nhat la: $max<br>";
