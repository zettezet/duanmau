<?php
session_start(); //Để chạy session
require_once "config.php";
//Model
require_once "Models/DB.php";
require_once "Models/Product.php";
require_once "Models/Category.php";
require_once "Models/User.php";
//Controller
require_once "Controllers/HomeController.php";
require_once "Controllers/ProductController.php";
require_once "Controllers/Admin/AdminProductController.php";
require_once "Controllers/AuthController.php";
//Biến điều khiển, lấy dữ liệu từ trên đường dẫn trình duyệt    
$c = $_GET['c'] ?? '';

match ($c) {
    '' => (new HomeController)->index(),
    'danh-sach' => (new ProductController)->index(),
    'chi-tiet' => (new ProductController)->show(),

    //Admin
    'admin-product' => (new AdminProductController)->index(),
    'admin-product-add' => (new AdminProductController)->create(),
    'admin-product-store' => (new AdminProductController)->store(),
    'admin-product-delete' => (new AdminProductController)->delete(),
    'admin-product-edit' => (new AdminProductController)->edit(),
    'admin-product-update' => (new  AdminProductController)->update(),

    //Đăng ký đăng nhập
    'login' => (new AuthController)->login(),
    'register' => (new AuthController)->register(),
    'logout' => (new AuthController)->logout(),
    default => (new HomeController)->error404()
};
