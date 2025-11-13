<?php
session_start();

$products = [
    ['id'=>1,'name'=>'iPhone 15 Pro','price'=>29990000,'image'=>'https://tse2.mm.bing.net/th/id/OIP.QQ_AhWpil9Da-IVorp_uegHaJM?pid=Api&P=0&h=220','description'=>'Điện thoại cao cấp của Apple'],
    ['id'=>2,'name'=>'Samsung S23 Ultra','price'=>25990000,'image'=>'https://tse1.mm.bing.net/th/id/OIP.2HFtW-tmli-lclS2Nq4ruQHaHk?pid=Api&P=0&h=220','description'=>'Siêu phẩm Android 2023'],
    ['id'=>3,'name'=>'Xiaomi 13','price'=>14990000,'image'=>'https://tse4.mm.bing.net/th/id/OIP.qXSRpH9AHtngUzIRnmMeDgHaHa?pid=Api&P=0&h=220','description'=>'Cấu hình mạnh, giá hợp lý'],
    ['id' => 4,'name' => 'Oppo Find X6 Pro','price' => 18990000,'image' => 'https://tse4.mm.bing.net/th/id/OIP.1IATo1ntNgpMqUA8N3u9IQHaHa?pid=Api&P=0&h=220','description' => 'Thiết kế đẹp, camera ấn tượng'],
    ['id' => 5,'name' => 'Vivo X90 Pro','price' => 16990000,'image' => 'https://tse4.mm.bing.net/th/id/OIP.zJb4BWiUXU8w1WBZvigJHAHaIM?pid=Api&P=0&h=220','description' => 'Camera ZEISS chuyên nghiệp']
];

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && $_POST['username'] && $_POST['password']) {
        $_SESSION['user'] = $_POST['username'];
    }
// }

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
$keyword = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
if ($keyword !== '') {
    $products = array_filter($products, function($item) use ($keyword) {
        return strpos(strtolower($item['name']), $keyword) !== false;
    });
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cửa hàng điện thoại</title>
    <style>
        body {font-family: Arial, sans-serif; margin:0; padding:0;}
        header { background:#333; color:#fff; text-align:center; padding:15px 0; }
        nav {
            background:#444;
            padding:10px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        nav ul {
            list-style:none;
            display:flex;
            margin:0;
            padding:0;
        }
        nav ul li {
            margin:0 15px;
        }
        nav ul li a {
            color:#fff;
            text-decoration:none;
            font-weight:bold;
        }
        nav ul li a:hover {
            color:#f90;
        }
        .search-form {
            margin-right:20px;
        }
        .search-form input[type="text"] {
            padding:5px;
            border-radius:4px;
            border:1px solid #ccc;
        }
        .search-form input[type="submit"] {
            padding:5px 10px;
            border:none;
            background:#28a745;
            color:#fff;
            border-radius:4px;
            cursor:pointer;
        }
        main { padding:20px; min-height:70vh; }
        footer {
            background:#333;
            color:#fff;
            text-align:center;
            padding:10px;
        }
        table {
            width:80%;
            margin:auto;
            border-collapse:collapse;
        }
        table,th,td {
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }
        .price {
            color:red;
            font-size:18px;
        }
        .login-form {
            text-align:right;
            margin:10px 20px;
        }
    </style>
</head>
<body>
<header>
    <h1>Cửa hàng Điện Thoại</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="cart.php">Giỏ hàng</a></li>
        <li><a href="contact.php">Liên hệ</a></li>

    </ul>
    <form class="search-form" method="get" action="index.php">
        <input type="text" name="search" placeholder="nhập tên sản phẩm..." value="<?=htmlspecialchars($keyword)?>">
        <input type="submit" value="Tìm">
    </form>
</nav>

<div class="login-form">
<?php if (isset($_SESSION['user'])): ?>
    <p>Xin chào, <strong><?= $_SESSION['user'] ?></strong> | <a href="?logout=1">Đăng xuất</a></p>
<?php else: ?>
    <form method="post">
        <input type="text" name="username" placeholder="Tên đăng nhập" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <input type="submit"  value="Đăng nhập">
    </form>
<?php endif; ?>
</div>

<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
        </tr>
        <?php if (count($products) > 0): ?>
            <?php foreach($products as $dt): ?>
            <tr>
                <td><?=$dt["id"]?></td>
                <td><?=$dt["name"]?></td>
                <td class="price"><?=number_format($dt["price"], 0, ',', '.')?> đ</td>
                <td><img src="<?=$dt["image"]?>" alt="<?=$dt["name"]?>" width="100"></td>
                <td><?=$dt["description"]?><br><a class="btn" href="add_to_cart.php?id=<?=$dt["id"]?>">Thêm vào giỏ</a></td>

            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Không tìm thấy sản phẩm phù hợp.</td></tr>
        <?php endif; ?>
    </table>
</main>

<footer>
    <p>© 2025 Cửa hàng điện thoại</p>
</footer>
</body>
</html>
