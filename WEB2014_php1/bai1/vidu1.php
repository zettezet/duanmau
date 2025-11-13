<?php
echo"<h1>Lap trinh php1 </h1>";

// khai bao mang
$arr = ['a', 23, 5, 'string'];

$arr2= ['id'=>'ph12345', 'email'=>'dtue68@gmail.com', 'name'=>'Hoang Duc Tue'];

// Hien thi mang

echo"<pre>";
print_r($arr);
echo"</pre>";
print_r($arr2);

$sinhvien = [
    ['id'=>'ph001', 'email'=>'dtue01@gmail.com', 'name'=>'Hoang Duc Tue_01'],
    ['id'=>'ph002', 'email'=>'dtue02@gmail.com', 'name'=>'Hoang Duc Tue_02'],
    ['id'=>'ph003', 'email'=>'dtue03@gmail.com', 'name'=>'Hoang Duc Tue_03'],
];
?>

<h2>Vong lap for</h2>
<?php for($i = 0; $i < count($arr); $i++) : ?>
    <div> <?= $arr[$i] ?></div>
<?php endfor ?>

<h2>Vong lap foreach</h2>
<table>
    <tr>
        <th>id</th>
        <th>email</th>
        <th>name</th>
    </tr>
<?php foreach($sinhvien as $sv) : ?>
    <tr>
        <td><?= $sv['id'] ?></td>
        <td><?= $sv['email'] ?></td>
        <td><?= $sv['name'] ?></td>
    </tr>
<?php endforeach ?>
</table>

