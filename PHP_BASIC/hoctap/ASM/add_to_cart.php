<?php
session_start();

$products = [
    1 => ['id'=>1,'name'=>'iPhone 15 Pro','price'=>29990000],
    2 => ['id'=>2,'name'=>'Samsung S23 Ultra','price'=>25990000],
    3 => ['id'=>3,'name'=>'Xiaomi 13','price'=>14990000],
    4 => ['id'=> 4,'name' => 'Oppo Find X6 Pro','price' => 18990000],
    5 => ['id'=> 5,'name' => 'Vivo X90 Pro','price' => 16990000]
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (isset($products[$id])) {
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = ['product' => $products[$id], 'quantity' => 1];
    } else {
        $_SESSION['cart'][$id]['quantity'] += 1;
    }
}

header("Location: cart.php");
exit();
