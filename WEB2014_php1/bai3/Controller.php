<?php

function index(){
    // Lấy thông tin connection
    global $conn;
    // Lấy dữ liệu sản phẩm
  $sql = "SELECT * FROM products";  
    // Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    // Thực thi câu lệnh
    $stmt->execute();
    // Lấy dữ liệu: là một mảng dữ liệu có key là tên cột
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Hiển thị view
    include_once "views/home.php";
}

// Them du lieu
function create(){
    global $conn;
    // Cau lenh sql them du lieu
    $sql = "INSERT INTO products(name, price, description, category_id) VALUES('Xiaomi 15T', 810, 'Xiaomi 15T', 1)";
    $sql = "INSERT INTO products(name, price, description, category_id) VALUES('Iphone', 810, 'Iphone', 1)";
    // Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    // Thực thi câu lệnh
    $stmt->execute();
    // Quay ve danh sach trang chu
    header("location: index.php");
    die;
}
function edit(){
    global $conn;
    // Cau lenh sql them du lieu
    $sql = "UPDATE products SET name='Iphone 7 plus', price=2143 WHERE id=3";
    // Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    // Thực thi câu lệnh
    $stmt->execute();
    // Quay ve danh sach trang chu
    header("location: index.php");
    die;
}
