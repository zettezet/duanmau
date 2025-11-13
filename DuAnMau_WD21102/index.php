<?php
session_start();

require_once "config.php";
require_once "Models/DB.php";
require_once "Models/Product.php";
require_once "Models/User.php";
require_once "Models/Category.php";

require_once "Controllers/HomeController.php";
require_once "Controllers/ProductController.php";
require_once "./Controllers/Admin/ListController.php";
require_once "./Controllers/Admin/CategoryController.php";


require_once "Controllers/AuthController.php";
$c = $_GET['c'] ?? '';

match ($c) {
    '' => (new HomeController)->index(),
    'list' => (new ProductController)->index(),
    'show' => (new ProductController)->show(),

    'admin-dashboard' => include_once "Views/admin/Dashboard.php",

    'admin-product' => (new ListController)->index(),
    'admin-product-add' => (new ListController)->create(),
    'admin-product-store' => (new ListController)->store(),
    'admin-product-delete' => (new ListController)->delete(),
    'admin-product-edit' => (new ListController)->edit(),
    'admin-product-update' => (new  ListController)->update(),

    'admin-product-1' => (new CategoryController)->index_1(),
    'admin-product-add-1' => (new CategoryController)->create_1(),
    'admin-product-store-1' => (new CategoryController)->store_1(),
    'admin-product-delete-1' => (new CategoryController)->delete_1(),
    'admin-product-edit-1' => (new CategoryController)->edit_1(),
    'admin-product-update-1' => (new  CategoryController)->update_1(),

    'login' => (new AuthController)->login(),
    'register' => (new AuthController)->register(),
    'logout' => (new AuthController)->logout(),
    default => (new HomeController)->error404()
};
