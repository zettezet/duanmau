<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm - Cửa Hàng Điện Thoại</title>
    <script src="/_sdk/element_sdk.js"></script>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100%;
        }

        html {
            height: 100%;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 25px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #ffd700, #ffed4e, #ffd700);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .logo-icon:hover {
            transform: rotate(10deg) scale(1.1);
        }

        .store-name {
            font-size: 28px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .auth-links {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .auth-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.15);
        }

        .auth-links a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            padding: 10px 20px;
            border-radius: 25px;
            position: relative;
            font-size: 16px;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #ffd700;
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 60%;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 40px 40px;
        }

        .breadcrumb {
            color: #ffffff;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: #ffd700;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .breadcrumb a:hover {
            opacity: 0.8;
        }

        .product-detail {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        /* Product Images */
        .product-images {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .main-image {
            width: 100%;
            aspect-ratio: 1;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .main-image svg {
            width: 70%;
            height: 70%;
        }

        .thumbnail-images {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .thumbnail {
            aspect-ratio: 1;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            border: 3px solid transparent;
        }

        .thumbnail:hover {
            border-color: #667eea;
            transform: translateY(-3px);
        }

        .thumbnail svg {
            width: 60%;
            height: 60%;
        }

        /* Product Info */
        .product-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .product-title {
            font-size: 36px;
            font-weight: bold;
            color: #2d3748;
            margin: 0;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stars {
            color: #ffd700;
            font-size: 20px;
        }

        .rating-text {
            color: #718096;
            font-size: 14px;
        }

        .product-price {
            font-size: 42px;
            font-weight: bold;
            color: #667eea;
            margin: 10px 0;
        }

        .product-description {
            color: #4a5568;
            line-height: 1.8;
            font-size: 16px;
        }

        .product-specs {
            background: #f7fafc;
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #667eea;
        }

        .product-specs h3 {
            margin: 0 0 15px 0;
            color: #2d3748;
            font-size: 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
            /* justify-content: space-between; */
            padding-left: 50px;
        }

        .product-grid-1 {
            background-color: #4a5568;
            padding: 20px 50px;
            text-align: center;
            font-weight: 1000;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .product-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            aspect-ratio: 1;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .product-image svg {
            width: 60%;
            height: 60%;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #48bb78;
            color: #ffffff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .product-badge.hot {
            background: #f56565;
        }

        .product-badge.new {
            background: #4299e1;
        }

        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            color: #2d3748;
            margin: 0;
        }

        .product-specs {
            font-size: 14px;
            color: #718096;
            line-height: 1.6;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stars {
            color: #ffd700;
            font-size: 14px;
        }

        .rating-count {
            font-size: 13px;
            color: #a0aec0;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
            margin-top: auto;
        }

        .product-price {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
        }

        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .spec-item:last-child {
            border-bottom: none;
        }

        .spec-label {
            color: #718096;
            font-weight: 600;
        }

        .spec-value {
            color: #2d3748;
            font-weight: 500;
        }

        .color-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .color-options h4 {
            margin: 0;
            color: #2d3748;
            font-size: 18px;
        }

        .color-choices {
            display: flex;
            gap: 12px;
        }

        .color-choice {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .color-choice:hover {
            transform: scale(1.1);
            border-color: #667eea;
        }

        .quantity-selector {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .quantity-selector h4 {
            margin: 0;
            color: #2d3748;
            font-size: 18px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border: 2px solid #667eea;
            background: #ffffff;
            color: #667eea;
            border-radius: 8px;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background: #667eea;
            color: #ffffff;
        }

        .quantity-display {
            font-size: 20px;
            font-weight: bold;
            color: #2d3748;
            min-width: 40px;
            text-align: center;
        }

        .total-price-section {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: 25px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid #e2e8f0;
        }

        .total-label {
            font-size: 20px;
            font-weight: 600;
            color: #4a5568;
        }

        .total-price {
            font-size: 36px;
            font-weight: bold;
            color: #667eea;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .btn {
            flex: 1;
            padding: 18px 30px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
        }

        .btn-secondary {
            background: #ffffff;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #f7fafc;
            transform: translateY(-3px);
        }

        footer {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
            color: #e2e8f0;
            padding: 60px 40px 30px 40px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            text-align: left;
        }

        .footer-section h3 {
            color: #ffffff;
            font-size: 18px;
            margin: 0 0 20px 0;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .footer-section p,
        .footer-section a {
            color: #cbd5e0;
            font-size: 14px;
            line-height: 2;
            text-decoration: none;
            display: block;
            transition: color 0.3s, transform 0.3s;
        }

        .footer-section a:hover {
            color: #ffffff;
            transform: translateX(5px);
        }

        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: all 0.3s;
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            margin: 0;
            font-size: 14px;
            color: #a0aec0;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .header-content {
                grid-template-columns: 1fr;
                gap: 20px;
                text-align: center;
            }

            .product-detail {
                grid-template-columns: 1fr;
                padding: 30px;
            }

            .product-title {
                font-size: 28px;
            }

            .product-price {
                font-size: 32px;
            }

            .action-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 640px) {
            header {
                padding: 20px;
            }

            main {
                padding: 0 20px 20px;
            }

            .product-detail {
                padding: 20px;
            }

            .store-name {
                font-size: 22px;
            }

            .thumbnail-images {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
    <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
</head>

<body><!-- Header giống trang chủ -->
    <header>
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    📱
                </div>
                <div class="store-name" id="storeName">
                    PhoneStore
                </div>
            </div>
            <nav><a href="<?= BASE_URL . '?c=' ?>">Trang Chủ</a> <a href="<?= BASE_URL . '?c=list' ?>">Sản Phẩm</a> <a href="#deals">Khuyến Mãi</a> <a href="#contact">Liên Hệ</a>
            </nav>
            <div class="auth-links">
                <?php if (!isset($_SESSION['user'])): ?>
                    <button onclick="location.href='<?= BASE_URL . '?c=login' ?>">Đăng nhập</button>
                    <button onclick="location.href='<?= BASE_URL . '?c=register' ?>">Đăng ký</button>
                <?php else: ?>
                    <span>Xin chào, <?= ($_SESSION['user']['name']) ?></span>
                    <button onclick="location.href='<?= BASE_URL . '?c=logout' ?>">Đăng xuất</button>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main>
        <div class="breadcrumb"><a href="<?= BASE_URL . '?c=' ?>">Trang chủ</a> / <a href="<?= BASE_URL . '?c=list' ?>">Sản phẩm</a> / <span id="breadcrumbProduct"><?= $data['name'] ?></span>
        </div>
        <div class="product-detail"><!-- Product Images -->
            <div class="product-images">
                <div class="main-image">
                    <img src="<?= $data['image'] ?>" alt="" width="100%">
                </div>
            </div><!-- Product Info -->
            <div class="product-info">
                <h1 class="product-title"><?= $data['name'] ?></h1>
                <div class="product-price" id="productPrice">
                    <?= number_format($data['price'], 000, 000) ?>đ
                </div>
                <p class="product-description" id="productDescription"><?= $data['description'] ?></p>
                <div class="product-specs">
                    <h3>Thông Số Kỹ Thuật</h3>
                    <div class="spec-item"><span class="spec-label">Màn hình:</span> <span class="spec-value"><?= $data['screen'] ?></span>
                    </div>
                    <div class="spec-item"><span class="spec-label">Chip:</span> <span class="spec-value"><?= $data['chipset'] ?></span>
                    </div>
                    <div class="spec-item"><span class="spec-label">Camera:</span> <span class="spec-value"><?= $data['camera'] ?></span>
                    </div>
                    <div class="spec-item"><span class="spec-label">RAM:</span> <span class="spec-value"><?= $data['ram'] ?>GB</span>
                    </div>
                    <div class="spec-item"><span class="spec-label">Dung lượng:</span> <span class="spec-value"><?= $data['capacity'] ?>GB</span>
                    </div>
                    <div class="spec-item"><span class="spec-label">Pin:</span> <span class="spec-value"><?= $data['battery'] ?>mAh</span>
                    </div>
                </div>

                <div class="quantity-selector">
                    <h4>Số Lượng:</h4>
                    <div class="quantity-controls"><button class="quantity-btn" id="decreaseBtn">−</button> <span class="quantity-display" id="quantityDisplay">1</span> <button class="quantity-btn" id="increaseBtn">+</button>
                    </div>
                </div>
                <div class="total-price-section">
                    <div class="total-label">
                        Tổng Tiền:
                    </div>
                    <div class="total-price" id="totalPrice">
                        <?= number_format($data['price'], 000, 000) ?>đ
                    </div>
                </div>
                <div class="action-buttons"><a href="#buy" class="btn btn-primary"> <span>🛒</span> <span id="buttonText">Mua Ngay</span> </a> <a href="#contact" class="btn btn-secondary"> <span>📞</span> <span>Liên Hệ</span> </a>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div>
            <h1 class="product-grid-1">Sản phẩm cùng loại</h1>
            <div class="product-grid"><!-- Product 1 -->
                <?php foreach ($products as $product): ?>
                    <a href="<?= BASE_URL . '?c=show&id=' . $product['id'] ?>" class="product-card">
                        <div class="product-image">
                            <img src="<?= $product['image'] ?>" alt="" width="100%">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><?= $product['name'] ?></h3>
                            <p class="product-specs"><?= $product['chipset'] ?> - <?= $product['screen'] ?> - <?= $product['capacity'] ?>GB</p>
                            <div class="product-footer"><span class="product-price"><?= number_format($product['price'], 000, 000) ?>đ</span>
                                <button class="add-to-cart-btn">Chi tiết</button>
                            </div>
                        </div>
                    </a> <!-- Product 2 -->
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Về Chúng Tôi</h3>
                    <p>PhoneStore - Cửa hàng điện thoại chính hãng uy tín với hơn 10 năm kinh nghiệm trong ngành.</p>
                    <div class="footer-social"><a href="#" class="social-icon" target="_blank" rel="noopener noreferrer">📘</a> <a href="#" class="social-icon" target="_blank" rel="noopener noreferrer">📷</a> <a href="#" class="social-icon" target="_blank" rel="noopener noreferrer">🐦</a> <a href="#" class="social-icon" target="_blank" rel="noopener noreferrer">📺</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Liên Kết</h3><a href="#products">Sản Phẩm</a> <a href="#reviews">Đánh Giá Khách Hàng</a> <a href="#features">Ưu Đãi Đặc Biệt</a> <a href="#contact">Liên Hệ</a>
                </div>
                <div class="footer-section">
                    <h3>Chính Sách</h3><a href="#" target="_blank" rel="noopener noreferrer">Chính Sách Bảo Hành</a> <a href="#" target="_blank" rel="noopener noreferrer">Chính Sách Đổi Trả</a> <a href="#" target="_blank" rel="noopener noreferrer">Chính Sách Bảo Mật</a> <a href="#" target="_blank" rel="noopener noreferrer">Điều Khoản Sử Dụng</a>
                </div>
                <div class="footer-section">
                    <h3>Liên Hệ</h3>
                    <p>📍 123 Đường ABC, Quận 1, TP.HCM</p>
                    <p>📞 Hotline: 1900-xxxx</p>
                    <p>✉️ Email: info@phonestore.vn</p>
                    <p>⏰ 8:00 - 22:00 (Tất cả các ngày)</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p id="footer-text">© 2024 PhoneStore - Cửa hàng điện thoại uy tín hàng đầu Việt Nam</p>
            </div>
        </div>
    </footer>
    <script>
        // Quantity and total price variables
        let quantity = 1;
        let unitPrice = <?= $data['price'] ?>;

        function parsePriceToNumber(priceString) {
            const numericString = priceString.replace(/[^\d.,]/g, '');
            const cleanNumber = numericString.replace(/\./g, '').replace(/,/g, '.');
            return parseFloat(cleanNumber) || 0;
        }

        function formatCurrency(number) {
            return number.toLocaleString('vi-VN') + 'đ';
        }

        function updateTotalPrice() {
            const total = unitPrice * quantity;
            document.getElementById('totalPrice').textContent = formatCurrency(total);
        }

        // Default config
        const defaultConfig = {
            store_name: "PhoneStore",
            product_name: "iPhone 15 Pro Max",
            product_price: "29.990.000đ",
            product_description: "iPhone 15 Pro Max với chip A17 Pro mạnh mẽ, camera 48MP chuyên nghiệp, màn hình Super Retina XDR 6.7 inch, và khung titan cao cấp. Trải nghiệm đỉnh cao với công nghệ tiên tiến nhất từ Apple.",
            button_text: "Mua Ngay",
            background_color: "#667eea",
            surface_color: "#ffffff",
            text_color: "#2d3748",
            primary_action_color: "#667eea",
            accent_color: "#ffd700",
            font_family: "Segoe UI",
            font_size: 16
        };

        // Initialize SDK
        async function onConfigChange(config) {
            const storeName = config.store_name || defaultConfig.store_name;
            const productName = config.product_name || defaultConfig.product_name;
            const productPrice = config.product_price || defaultConfig.product_price;
            const productDescription = config.product_description || defaultConfig.product_description;
            const buttonText = config.button_text || defaultConfig.button_text;
            const backgroundColor = config.background_color || defaultConfig.background_color;
            const surfaceColor = config.surface_color || defaultConfig.surface_color;
            const textColor = config.text_color || defaultConfig.text_color;
            const primaryActionColor = config.primary_action_color || defaultConfig.primary_action_color;
            const accentColor = config.accent_color || defaultConfig.accent_color;
            const fontFamily = config.font_family || defaultConfig.font_family;
            const fontSize = config.font_size || defaultConfig.font_size;

            // Update text content
            document.getElementById('storeName').textContent = storeName;
            document.getElementById('productName').textContent = productName;
            document.getElementById('breadcrumbProduct').textContent = productName;
            document.getElementById('productPrice').textContent = productPrice;
            document.getElementById('productDescription').textContent = productDescription;
            document.getElementById('buttonText').textContent = buttonText;

            // Update unit price and recalculate total
            unitPrice = parsePriceToNumber(productPrice);
            updateTotalPrice();

            // Update colors
            document.body.style.background = `linear-gradient(135deg, ${backgroundColor} 0%, ${backgroundColor} 100%)`;
            document.querySelector('header').style.background = `linear-gradient(135deg, ${backgroundColor} 0%, ${backgroundColor} 100%)`;

            const detailCard = document.querySelector('.product-detail');
            if (detailCard) {
                detailCard.style.background = surfaceColor;
            }

            // Update text colors
            document.querySelectorAll('.product-title, .spec-label, .spec-value, h3, h4').forEach(el => {
                el.style.color = textColor;
            });

            // Update primary action color
            document.querySelectorAll('.btn-primary').forEach(btn => {
                btn.style.background = `linear-gradient(135deg, ${primaryActionColor} 0%, ${primaryActionColor} 100%)`;
            });

            document.querySelectorAll('.btn-secondary').forEach(el => {
                el.style.borderColor = primaryActionColor;
                el.style.color = primaryActionColor;
            });

            document.querySelector('.product-price').style.color = primaryActionColor;
            document.querySelector('.total-price').style.color = primaryActionColor;
            document.querySelector('.product-specs').style.borderLeftColor = primaryActionColor;

            document.querySelectorAll('.quantity-btn').forEach(btn => {
                btn.style.borderColor = primaryActionColor;
                btn.style.color = primaryActionColor;
            });

            // Update accent color
            document.querySelector('.stars').style.color = accentColor;

            // Update font
            const baseFontStack = 'Tahoma, Geneva, Verdana, sans-serif';
            document.body.style.fontFamily = `${fontFamily}, ${baseFontStack}`;

            // Update font sizes
            document.querySelector('.store-name').style.fontSize = `${fontSize * 1.75}px`;
            document.querySelectorAll('nav a, .auth-links a').forEach(el => {
                el.style.fontSize = `${fontSize}px`;
            });
            document.querySelector('.product-title').style.fontSize = `${fontSize * 2.25}px`;
            document.querySelector('.product-price').style.fontSize = `${fontSize * 2.625}px`;
            document.querySelector('.total-price').style.fontSize = `${fontSize * 2.25}px`;
            document.querySelector('.total-label').style.fontSize = `${fontSize * 1.25}px`;
            document.querySelector('.product-description').style.fontSize = `${fontSize}px`;
            document.querySelector('.quantity-display').style.fontSize = `${fontSize * 1.25}px`;
            document.querySelectorAll('.btn').forEach(btn => {
                btn.style.fontSize = `${fontSize * 1.125}px`;
            });
            document.querySelectorAll('h3').forEach(h => {
                h.style.fontSize = `${fontSize * 1.25}px`;
            });
            document.querySelectorAll('h4').forEach(h => {
                h.style.fontSize = `${fontSize * 1.125}px`;
            });
        }

        if (window.elementSdk) {
            window.elementSdk.init({
                defaultConfig,
                onConfigChange,
                mapToCapabilities: (config) => ({
                    recolorables: [{
                            get: () => config.background_color || defaultConfig.background_color,
                            set: (value) => {
                                config.background_color = value;
                                window.elementSdk.setConfig({
                                    background_color: value
                                });
                            }
                        },
                        {
                            get: () => config.surface_color || defaultConfig.surface_color,
                            set: (value) => {
                                config.surface_color = value;
                                window.elementSdk.setConfig({
                                    surface_color: value
                                });
                            }
                        },
                        {
                            get: () => config.text_color || defaultConfig.text_color,
                            set: (value) => {
                                config.text_color = value;
                                window.elementSdk.setConfig({
                                    text_color: value
                                });
                            }
                        },
                        {
                            get: () => config.primary_action_color || defaultConfig.primary_action_color,
                            set: (value) => {
                                config.primary_action_color = value;
                                window.elementSdk.setConfig({
                                    primary_action_color: value
                                });
                            }
                        },
                        {
                            get: () => config.accent_color || defaultConfig.accent_color,
                            set: (value) => {
                                config.accent_color = value;
                                window.elementSdk.setConfig({
                                    accent_color: value
                                });
                            }
                        }
                    ],
                    borderables: [],
                    fontEditable: {
                        get: () => config.font_family || defaultConfig.font_family,
                        set: (value) => {
                            config.font_family = value;
                            window.elementSdk.setConfig({
                                font_family: value
                            });
                        }
                    },
                    fontSizeable: {
                        get: () => config.font_size || defaultConfig.font_size,
                        set: (value) => {
                            config.font_size = value;
                            window.elementSdk.setConfig({
                                font_size: value
                            });
                        }
                    }
                }),
                mapToEditPanelValues: (config) => new Map([
                    ["store_name", config.store_name || defaultConfig.store_name],
                    ["product_name", config.product_name || defaultConfig.product_name],
                    ["product_price", config.product_price || defaultConfig.product_price],
                    ["product_description", config.product_description || defaultConfig.product_description],
                    ["button_text", config.button_text || defaultConfig.button_text]
                ])
            });
        }

        // Initialize on load
        onConfigChange(defaultConfig);

        // Quantity controls
        document.getElementById('decreaseBtn').addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                document.getElementById('quantityDisplay').textContent = quantity;
                updateTotalPrice();
            }
        });

        document.getElementById('increaseBtn').addEventListener('click', () => {
            if (quantity < 99) {
                quantity++;
                document.getElementById('quantityDisplay').textContent = quantity;
                updateTotalPrice();
            }
        });
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'99c316b7345084cc',t:'MTc2Mjc1MTkwMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>