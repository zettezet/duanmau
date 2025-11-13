<?php
session_start();

require_once "config.php";
require_once "Models/DB.php";
require_once "Models/Post.php";
require_once "Models/User.php";

require_once "Controllers/HomeController.php";
require_once "Controllers/PostController.php";

require_once "Controllers/Admin/AdminUserController.php";
require_once "Controllers/Admin/AdminListController.php";
require_once "Controllers/Admin/AdminPostController.php";

require_once "Controllers/AuthController.php";
$c = $_GET['c'] ?? '';

match ($c){
    '' => (new HomeController)->index(),
    'danh-sach' => (new PostController)->index(),
    'chi-tiet' => (new PostController)->show(),

    'admin-dashboard' => include_once "Views/admin/Dashboard.php",

    'admin-product' => (new AdminPostController)->index(),
    'admin-product-add' => (new AdminPostController)->create(),
    'admin-product-store' => (new AdminPostController)->store(),
    'admin-product-delete' => (new AdminPostController)->delete(),
    'admin-product-edit' => (new AdminPostController)->edit(),
    'admin-product-update' => (new  AdminPostController)->update(),

    'admin-product-1' => (new AdminListController)->index_1(),
    'admin-product-add-1' => (new AdminListController)->create_1(),
    'admin-product-store-1' => (new AdminListController)->store_1(),
    'admin-product-delete-1' => (new AdminListController)->delete_1(),
    'admin-product-edit-1' => (new AdminListController)->edit_1(),
    'admin-product-update-1' => (new  AdminListController)->update_1(),

    'admin-product-2' => (new AdminUserController)->index_2(),
    'admin-product-add-2' => (new AdminUserController)->create_2(),
    'admin-product-store-2' => (new AdminUserController)->store_2(),
    'admin-product-delete-2' => (new AdminUserController)->delete_2(),
    'admin-product-edit-2' => (new AdminUserController)->edit_2(),
    'admin-product-update-2' => (new  AdminUserController)->update_2(),

    'login' => (new AuthController)->login(),
    'register' => (new AuthController)->register(),
    'logout' => (new AuthController)->logout(),
    default => (new HomeController)->error404()
};