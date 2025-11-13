<?php
if (!isset($_SESSION['user'])) {
    header('Location: ' . BASE_URL . '?c=login');
    exit;
}

require_once "Models/List.php";
require_once "Models/Post.php";
require_once "Models/User.php";

// Lấy số liệu tổng quan
$listModel = new Listmodels();
$postModel = new Post();
$userModel = new User();

$listCount = count($listModel->all());
$postCount = count($postModel->all());
$userCount = count($userModel->all());
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Trang quản trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #0f0f10, #1c1c1e);
            color: #fff;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            background: #1e1e24 !important;
            border-bottom: 1px solid #ff00ff50;
        }

        .nav-link {
            color: #ccc !important;
            border-radius: 10px;
            padding: 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            background: linear-gradient(90deg, #ff00ff, #ff9900);
            color: #fff !important;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.2);
        }

        .card-title {
            color: #ffb347;
            font-weight: 600;
        }

        h4 {
            background: linear-gradient(90deg, #ff00ff, #ff9900);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .sidebar {
            background: rgba(30, 30, 35, 0.9);
            border-radius: 15px;
            height: 100%;
            padding: 20px;
        }

        .display-6 {
            color: #fff;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-gradient" href="<?= BASE_URL ?>?c=admin-dashboard">⚙️ Admin Dashboard</a>
            <div class="d-flex">
                <span class="text-white me-3">
                    👋 Xin chào, <strong><?= $_SESSION['user']['username'] ?? 'Admin' ?></strong>
                </span>
                <a href="<?= BASE_URL ?>" class="btn btn-outline-light btn-sm">Đăng xuất</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row g-3">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <h5 class="mb-3">📁 Danh mục quản lý</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="<?= BASE_URL ?>?c=admin-product" class="nav-link">📰 Quản lý bài viết</a></li>
                    <li class="nav-item"><a href="<?= BASE_URL ?>?c=admin-product-1" class="nav-link">📂 Quản lý danh mục</a></li>
                    <li class="nav-item"><a href="<?= BASE_URL ?>?c=admin-product-2" class="nav-link">👤 Quản lý người dùng</a></li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="col-md-9 col-lg-10">
                <div class="p-4 bg-dark rounded">
                    <h4>📊 Tổng quan hệ thống</h4>
                    <p>Chào mừng bạn đến với bảng điều khiển quản trị!</p>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card border-success text-center p-3">
                                <h5 class="card-title">Danh mục</h5>
                                <p class="display-1"><?= $listCount ?></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-primary text-center p-3">
                                <h5 class="card-title">Bài viết</h5>
                                <p class="display-1"><?= $postCount ?></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-warning text-center p-3">
                                <h5 class="card-title">Người dùng</h5>
                                <p class="display-1"><?= $userCount ?></p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 border-secondary">

                    <h5>🆕 Tin mới</h5>
                    <p>Bạn có thể cập nhật danh mục, bài viết hoặc thêm người dùng mới bằng menu bên trái.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
