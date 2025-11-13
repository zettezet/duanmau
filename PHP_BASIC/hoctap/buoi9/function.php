<?php
//định nghĩa hàm
function makeTotal(): void{
    $a=3;
    $b=6;
    $total=$a+$b;
    echo"Tổng $a + $b = $total";
}
//Hàm có tham số
function makeTotal1($a,$b){
    $total1= $a + $b;
    echo "<br> Tổng $a + $b = $total1";
}
//Lời gọi hàm
makeTotal();
makeTotal1(10,5);
$x=10; $y=15;
makeTotal1($x,$y);
 
function showArray($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
$fruit=["apple", "banana","cherry"];
showArray($fruit);
//Hàm có giá trị mặc định 
function sayHello($name){
    echo"<br> Hello $name";
}
$name="Tuệ";
sayHello($name);
//Hàm có giá trị trả về 
function makeTotal3($a,$b){
    $total3 = $a + $b;
    return $total3;
}
echo makeTotal3(4,4);
// Phạm vi biến
$ten ="Tue";
function showName(){
    global $ten;
    echo"<br>Tên: $ten";
}
showName();
function increment(&$num){
    $num=$num+1;
    echo"<br>bên trong: $num";
}
$number=5;
echo" <br> bên ngoài, trước khi gọi hàm: $number";
increment($number);
echo" <br> bên ngoài, sau khi gọi hàm: $number";
?>