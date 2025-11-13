<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (isset($_GET['remove'])) {
    $idToRemove = $_GET['remove'];
    foreach ($_SESSION['cart'] as $index => $item) {
        if ($item['product']['id'] == $idToRemove) {
            unset($_SESSION['cart'][$index]);
            break;
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <style>
        table { width:60%; margin:auto; border-collapse:collapse; margin-top:30px; }
        th, td { border:1px solid #ccc; padding:10px; text-align:center; }
        h2 { text-align:center; }
        .total { font-weight:bold; color:red; }
        a.btn {
            display:inline-block;
            padding:5px 10px;
            background:#007bff;
            color:white;
            text-decoration:none;
            border-radius:4px;
        }
        a.btn:hover { background:#0056b3; }
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
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            }

        main {
            flex: 1;
            }

    </style>
</head>
<body>
    <div class="wrapper">
<header>
    <h1>Cửa hàng Điện Thoại</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="cart.php">Giỏ hàng</a></li>
        <li><a href="contact.php">Liên hệ</a></li>

    </ul>
</nav>

<div class="login-form">
<?php if (isset($_SESSION['user'])): ?>
    <p>Xin chào, <strong><?= $_SESSION['user'] ?></strong> | <a href="?logout=1">Đăng xuất</a></p>
<?php else: ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Tên đăng nhập" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <input type="submit" value="Đăng nhập">
    </form>
<?php endif; ?>
</div>
    <h2>🛒 Giỏ hàng của bạn</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
        </tr>
        <?php
        $total = 0;
        foreach ($cart as $item):
            $subtotal = $item['product']['price'] * $item['quantity'];
            $total += $subtotal;
        ?>
        <tr>
            <td><?= $item['product']['name'] ?></td>
            <td><?= number_format($item['product']['price'], 0, ',', '.') ?> đ</td>
            <td><?= $item['quantity'] ?></td>
            <td><?= number_format($subtotal, 0, ',', '.') ?> đ</td>
            <td><a href="?remove=<?= $item['product']['id'] ?>" onclick="return confirm('Xóa sản phẩm này?');" class="btn" style="background:red;">X</a></td>

        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" class="total">Tổng cộng</td>
            <td class="total"><?= number_format($total, 0, ',', '.') ?> đ</td>
        </tr>
    </table>
    <p style="text-align:center; margin-top:20px;">
        <a href="index.php" class="btn">← Tiếp tục mua</a>
    </p>
    <footer>
    <p>© 2025 Cửa hàng điện thoại</p>
</footer>
    </div>
</body>
</html>
