<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm - Cửa Hàng Điện Thoại</title>
    <script src="/_sdk/element_sdk.js"></script>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100%;
            display: flex;
            flex-direction: column;
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
            grid-template-columns: auto 1fr auto auto;
            align-items: center;
            gap: 40px;
        }

        .search-container {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 8px 20px;
            gap: 10px;
            transition: all 0.3s;
            width: 900px;
            min-width: 250px;
        }

        .zettezet {
            display: flex;
            justify-content: space-between;
        }

        .search-container:focus-within {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .search-icon {
            font-size: 18px;
            color: #ffffff;
        }

        .search-input {
            background: transparent;
            border: none;
            outline: none;
            color: #ffffff;
            font-size: 15px;
            width: 100%;
            padding: 5px 0;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .cart-icon-container {
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .cart-icon-container:hover {
            transform: scale(1.1);
        }

        .cart-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            transition: all 0.3s;
        }

        .cart-icon:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #f56565;
            color: #ffffff;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            border: 2px solid #667eea;
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
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            width: 100%;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .page-title {
            font-size: 48px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 15px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .page-subtitle {
            font-size: 18px;
            color: #ffffff;
            opacity: 0.9;
        }

        /* Filter Section */
        .filter-section {
            background: #ffffff;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-label {
            font-weight: 600;
            color: #2d3748;
            font-size: 16px;
        }

        .filter-tag {
            padding: 8px 16px;
            background: #f7fafc;
            border: 2px solid #e2e8f0;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 14px;
            color: #4a5568;
        }

        .filter-tag:hover {
            border-color: #667eea;
            background: #edf2f7;
            color: #667eea;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
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

        .add-to-cart-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 14px;
        }

        .add-to-cart-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* Footer */
        /* footer {
            background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
            color: #ffffff;
            padding: 40px;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .footer-section h3 {
            font-size: 20px;
            margin: 0 0 20px 0;
            color: #ffd700;
        }

        .footer-section p,
        .footer-section a {
            color: #cbd5e0;
            line-height: 1.8;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 30px auto 0;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            color: #a0aec0;
        }

        .social-links {
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
            text-decoration: none;
        }

        .social-icon:hover {
            background: #667eea;
            transform: translateY(-3px);
        } */
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

            .search-container {
                min-width: 100%;
            }

            .cart-icon-container {
                margin: 0 auto;
            }

            .page-title {
                font-size: 36px;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 640px) {
            header {
                padding: 20px;
            }

            main {
                padding: 20px;
            }

            .store-name {
                font-size: 22px;
            }

            .page-title {
                font-size: 28px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .filter-section {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
    <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
</head>

<body><!-- Header -->
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
                    <button onclick="location.href='<?= BASE_URL ?>?c=login'">Đăng nhập</button>
                    <button onclick="location.href='<?= BASE_URL ?>?c=register'">Đăng ký</button>
                <?php else: ?>
                    <span>Xin chào, <?= htmlspecialchars($_SESSION['user']['name']) ?></span>
                    <button onclick="location.href='<?= BASE_URL ?>?c=logout'">Đăng xuất</button>
                <?php endif; ?>
            </div>

        </div>
    </header><!-- Main Content -->
    <main>
        <div class="page-header">
            <h1 class="page-title" id="pageTitle">Danh Sách Sản Phẩm</h1>
            <section class="zettezet">
                <div class="search-container"><span class="search-icon">🔍</span> <input type="text" class="search-input" placeholder="Tìm kiếm sản phẩm...">
                </div><a href="#cart" class="cart-icon-container">
                    <div class="cart-icon">
                        🛒
                    </div><span class="cart-badge">3</span>
                </a>
            </section>

        </div><!-- Filter Section -->
        <div class="filter-section">
            <div class="filter-group"><span class="filter-label">Hãng:</span> <span class="filter-tag">Tất cả</span> <span class="filter-tag">Apple</span> <span class="filter-tag">Samsung</span> <span class="filter-tag">Xiaomi</span>
            </div>
            <div class="filter-group"><span class="filter-label">Giá:</span> <span class="filter-tag">Dưới 10 triệu</span> <span class="filter-tag">10-20 triệu</span> <span class="filter-tag">Trên 20 triệu</span>
            </div>
        </div><!-- Product Grid -->
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
    </main><!-- Footer -->
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
        // Default config
        const defaultConfig = {
            store_name: "PhoneStore",
            page_title: "Danh Sách Sản Phẩm",
            footer_text: "© 2024 Cửa Hàng Điện Thoại. Tất cả quyền được bảo lưu.",
            contact_info: "Hotline: 1900-xxxx\nEmail: contact@store.com\nĐịa chỉ: 123 Đường ABC, Quận 1, TP.HCM",
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
            const pageTitle = config.page_title || defaultConfig.page_title;
            const footerText = config.footer_text || defaultConfig.footer_text;
            const contactInfo = config.contact_info || defaultConfig.contact_info;
            const backgroundColor = config.background_color || defaultConfig.background_color;
            const surfaceColor = config.surface_color || defaultConfig.surface_color;
            const textColor = config.text_color || defaultConfig.text_color;
            const primaryActionColor = config.primary_action_color || defaultConfig.primary_action_color;
            const accentColor = config.accent_color || defaultConfig.accent_color;
            const fontFamily = config.font_family || defaultConfig.font_family;
            const fontSize = config.font_size || defaultConfig.font_size;

            // Update text content
            document.getElementById('storeName').textContent = storeName;
            document.getElementById('pageTitle').textContent = pageTitle;
            document.getElementById('footerText').textContent = footerText;

            const contactInfoElement = document.getElementById('contactInfo');
            contactInfoElement.innerHTML = contactInfo.replace(/\n/g, '<br>');

            // Update colors
            document.body.style.background = `linear-gradient(135deg, ${backgroundColor} 0%, ${backgroundColor} 100%)`;
            document.querySelector('header').style.background = `linear-gradient(135deg, ${backgroundColor} 0%, ${backgroundColor} 100%)`;

            document.querySelectorAll('.product-card, .filter-section').forEach(el => {
                el.style.background = surfaceColor;
            });

            // Update text colors
            document.querySelectorAll('.product-name, .filter-label, h3').forEach(el => {
                el.style.color = textColor;
            });

            // Update primary action color
            document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
                btn.style.background = `linear-gradient(135deg, ${primaryActionColor} 0%, ${primaryActionColor} 100%)`;
            });

            document.querySelectorAll('.product-price').forEach(el => {
                el.style.color = primaryActionColor;
            });

            document.querySelectorAll('.filter-tag:hover').forEach(tag => {
                tag.style.borderColor = primaryActionColor;
                tag.style.color = primaryActionColor;
            });

            // Update accent color
            document.querySelectorAll('.stars').forEach(el => {
                el.style.color = accentColor;
            });

            document.querySelectorAll('nav a::after').forEach(el => {
                el.style.backgroundColor = accentColor;
            });

            document.querySelectorAll('.footer-section h3').forEach(el => {
                el.style.color = accentColor;
            });

            // Update font
            const baseFontStack = 'Tahoma, Geneva, Verdana, sans-serif';
            document.body.style.fontFamily = `${fontFamily}, ${baseFontStack}`;

            // Update font sizes
            document.querySelector('.store-name').style.fontSize = `${fontSize * 1.75}px`;
            document.querySelectorAll('nav a, .auth-links a').forEach(el => {
                el.style.fontSize = `${fontSize}px`;
            });
            document.querySelector('.page-title').style.fontSize = `${fontSize * 3}px`;
            document.querySelector('.page-subtitle').style.fontSize = `${fontSize * 1.125}px`;
            document.querySelectorAll('.product-name').forEach(el => {
                el.style.fontSize = `${fontSize * 1.125}px`;
            });
            document.querySelectorAll('.product-price').forEach(el => {
                el.style.fontSize = `${fontSize * 1.5}px`;
            });
            document.querySelectorAll('.filter-label').forEach(el => {
                el.style.fontSize = `${fontSize}px`;
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
                    ["page_title", config.page_title || defaultConfig.page_title],
                    ["footer_text", config.footer_text || defaultConfig.footer_text],
                    ["contact_info", config.contact_info || defaultConfig.contact_info]
                ])
            });
        }

        // Initialize on load
        onConfigChange(defaultConfig);
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'99c36d941761e2f9',t:'MTc2Mjc1NTQ1OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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