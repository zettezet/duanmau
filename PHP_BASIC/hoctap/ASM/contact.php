<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liên hệ</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form { width: 400px; margin: auto; background:#f9f9f9; padding:20px; border-radius:8px; }
        input, textarea { width:100%; margin:10px 0; padding:8px; border:1px solid #ccc; border-radius:4px; }
        input[type="submit"] { background:#28a745; color:white; cursor:pointer; }
        input[type="submit"]:hover { background:#218838; }
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
    <h2 style="text-align:center;">📞 Liên hệ với chúng tôi</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Họ tên" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Nội dung" rows="5" required></textarea>
        <input type="submit" value="Gửi liên hệ">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<p style='text-align:center; color:green;'>✅ Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm.</p>";
    }
    ?>
        <footer>
    <p>© 2025 Cửa hàng điện thoại</p>
</footer>
    </div>
</body>
</html>
