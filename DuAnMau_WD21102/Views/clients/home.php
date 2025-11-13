<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Điện Thoại</title>
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

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 40px;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0 0 20px 0;
            font-weight: 700;
        }

        .hero p {
            font-size: 20px;
            margin: 0 0 30px 0;
            opacity: 0.95;
        }

        .cta-button {
            display: inline-block;
            background-color: #ffffff;
            color: #667eea;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Products Section */
        .products-section {
            background-color: #f7fafc;
            padding: 60px 40px;
        }

        .products-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            color: #2d3748;
            margin: 0 0 50px 0;
            font-weight: 700;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: 460px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
        }

        .product-info {
            padding: 20px;
        }

        .product-name {
            font-size: 20px;
            font-weight: 600;
            color: #2d3748;
            margin: 0 0 10px 0;
        }

        .product-specs {
            font-size: 14px;
            color: #718096;
            margin: 0 0 15px 0;
            line-height: 1.6;
        }

        .product-price {
            font-size: 24px;
            font-weight: 700;
            color: #667eea;
            margin: 0 0 15px 0;
        }

        .buy-button {
            display: block;
            width: 100%;
            background-color: #667eea;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .buy-button:hover {
            background-color: #5568d3;
        }

        /* Reviews Section */
        .reviews-section {
            background-color: #ffffff;
            padding: 60px 40px;
        }

        .reviews-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .review-card {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            border-left: 4px solid #667eea;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .review-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .reviewer-info h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            color: #2d3748;
            font-weight: 600;
        }

        .review-stars {
            font-size: 14px;
            letter-spacing: 2px;
        }

        .review-text {
            color: #4a5568;
            font-size: 14px;
            line-height: 1.7;
            margin: 0 0 15px 0;
            font-style: italic;
        }

        .review-date {
            color: #a0aec0;
            font-size: 12px;
            text-align: right;
        }

        /* Features Section */
        .features-section {
            background-color: #ffffff;
            padding: 60px 40px;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .feature {
            text-align: center;
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 20px;
            color: #2d3748;
            margin: 0 0 10px 0;
        }

        .feature p {
            font-size: 14px;
            color: #718096;
            margin: 0;
            line-height: 1.6;
        }

        /* Feedback Section */
        .feedback-section {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: 60px 40px;
        }

        .feedback-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .feedback-intro {
            text-align: center;
            margin-bottom: 40px;
        }

        .feedback-intro p {
            font-size: 16px;
            color: #4a5568;
            line-height: 1.6;
        }

        .feedback-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .star-rating {
            display: flex;
            gap: 5px;
            font-size: 28px;
            cursor: pointer;
        }

        .star {
            transition: transform 0.2s, opacity 0.2s;
            opacity: 0.3;
        }

        .star.active {
            opacity: 1;
            transform: scale(1.1);
        }

        .star:hover {
            transform: scale(1.2);
        }

        .submit-button {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            margin-top: 30px;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        .success-message {
            display: none;
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(72, 187, 120, 0.3);
        }

        .success-message.show {
            display: block;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .success-message h3 {
            font-size: 24px;
            margin: 0 0 10px 0;
        }

        .success-message p {
            font-size: 16px;
            margin: 0;
            opacity: 0.95;
        }

        /* Footer */
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
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            .section-title {
                font-size: 28px;
            }

            .header-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 20px;
            }

            nav {
                justify-content: center;
            }

            .auth-links {
                justify-content: center;
            }
        }

        .header-user {
            display: flex;
            /* display: none; */
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.05);
            padding: 15px 25px;
            border-radius: 15px;
            margin-bottom: 25px;
            gap: 20px;
        }

        .username {
            font-weight: 600;
            font-size: 1.1rem;
            color: #ffb347;
        }

        /* .auth-links:hover {
            display: none;
            cursor: pointer;
        } */
    </style>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
    <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
</head>

<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    📱
                </div>
                <div class="store-name" id="store-name">
                    PhoneStore
                </div>

            </div>
            <nav><a href="<?= BASE_URL . '?c=list' ?>">Sản Phẩm</a> <a href="#features">Ưu Đãi</a> <a href="#feedback">Góp Ý</a> <a href="#contact">Liên Hệ</a>
            </nav>
            <div class="auth-links">
                <?php if (!isset($_SESSION['user'])): ?>
                    <button onclick="location.href='<?= BASE_URL ?>?c=login'">Đăng nhập</button>
                    <button onclick="location.href='<?= BASE_URL ?>?c=register'">Đăng ký</button>
                <?php else: ?>
                    <span>Xin chào, <?= ($_SESSION['user']['name']) ?></span>
                    <button onclick="location.href='<?= BASE_URL ?>?c=logout'">Đăng xuất</button>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main>

        <section class="hero">
            <div class="hero-content">
                <h1 id="hero-title">Điện Thoại Chính Hãng Giá Tốt</h1>
                <p id="hero-subtitle">Nâng tầm trải nghiệm công nghệ – nơi mỗi chiếc điện thoại kể một câu chuyện riêng. ✨</p><a href="#products" class="cta-button">Xem Sản Phẩm Nổi Bật</a>
            </div>
        </section>
        <section class="features-section" id="features">
            <div class="features-container">
                <div class="feature">
                    <div class="feature-icon">
                        🚚
                    </div>
                    <h3>Giao Hàng Miễn Phí</h3>
                    <p>Miễn phí vận chuyển cho đơn hàng trên 5 triệu đồng</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        ✅
                    </div>
                    <h3>Bảo Hành Chính Hãng</h3>
                    <p>Bảo hành 12 tháng tại các trung tâm ủy quyền</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        💳
                    </div>
                    <h3>Trả Góp 0%</h3>
                    <p>Hỗ trợ trả góp lãi suất 0% qua thẻ tín dụng</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        🎁
                    </div>
                    <h3>Quà Tặng Hấp Dẫn</h3>
                    <p>Nhiều ưu đãi và quà tặng giá trị khi mua hàng</p>
                </div>
            </div>
        </section>
        <section class="products-section" id="products">
            <div class="products-container">
                <h2 class="section-title" id="section-title">Sản Phẩm Nổi Bật</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="
                            <?php foreach ($products as $p) {
                                if ($p['id'] == 1) {
                                    echo $p['image'];
                                }
                            }
                            ?>" width="100%">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 1) {
                                        echo $p['name'];
                                    }
                                }
                                ?></h3>
                            <p class="product-specs">•
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 1) {
                                        echo $p['chipset'];
                                    }
                                }
                                ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 1) {
                                            echo $p['camera'];
                                        }
                                    }
                                    ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 1) {
                                            echo $p['screen'];
                                        }
                                    }
                                    ?></p>
                            <div class="product-price">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 1) {
                                        echo number_format($p['price'], 000, 000);
                                    }
                                }
                                ?>₫
                            </div><a href="<?= BASE_URL . '?c=list' ?>" class="buy-button" target="_blank" rel="noopener noreferrer">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image-2">
                            <img src="
                            <?php foreach ($products as $p) {
                                if ($p['id'] == 3) {
                                    echo $p['image'];
                                }
                            }
                            ?>" width="100%">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 3) {
                                        echo $p['name'];
                                    }
                                }
                                ?></h3>
                            <p class="product-specs">•
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 3) {
                                        echo $p['chipset'];
                                    }
                                }
                                ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 3) {
                                            echo $p['camera'];
                                        }
                                    }
                                    ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 3) {
                                            echo $p['screen'];
                                        }
                                    }
                                    ?></p>
                            <div class="product-price">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 3) {
                                        echo number_format($p['price'], 000, 000);
                                    }
                                }
                                ?>₫
                            </div><a href="<?= BASE_URL . '?c=list' ?>" class="buy-button" target="_blank" rel="noopener noreferrer">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image-3">
                            <img src="
                            <?php foreach ($products as $p) {
                                if ($p['id'] == 5) {
                                    echo $p['image'];
                                }
                            }
                            ?>" width="100%">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 5) {
                                        echo $p['name'];
                                    }
                                }
                                ?></h3>
                            <p class="product-specs">•
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 5) {
                                        echo $p['chipset'];
                                    }
                                }
                                ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 5) {
                                            echo $p['camera'];
                                        }
                                    }
                                    ?><br>
                                • <?php foreach ($products as $p) {
                                        if ($p['id'] == 5) {
                                            echo $p['screen'];
                                        }
                                    }
                                    ?></p>
                            <div class="product-price">
                                <?php foreach ($products as $p) {
                                    if ($p['id'] == 5) {
                                        echo number_format($p['price'], 000, 000);
                                    }
                                }
                                ?>₫
                            </div><a href="<?= BASE_URL . '?c=list' ?>" class="buy-button" target="_blank" rel="noopener noreferrer">Mua Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="feedback-section" id="feedback">
            <div class="feedback-container">
                <h2 class="section-title">Gửi Góp Ý Của Bạn</h2>
                <div class="feedback-intro">
                    <p>Ý kiến của bạn rất quan trọng với chúng tôi! Hãy chia sẻ trải nghiệm mua sắm để giúp chúng tôi phục vụ tốt hơn.</p>
                </div>
                <form class="feedback-form" id="feedbackForm">
                    <div class="form-row">
                        <div class="form-group"><label for="customer-name">Họ và Tên *</label> <input type="text" id="customer-name" name="customer-name" required placeholder="Nhập họ tên của bạn">
                        </div>
                        <div class="form-group"><label for="customer-email">Email *</label> <input type="email" id="customer-email" name="customer-email" required placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label for="customer-phone">Số Điện Thoại</label> <input type="tel" id="customer-phone" name="customer-phone" placeholder="0123456789">
                        </div>
                        <div class="form-group"><label for="rating">Đánh Giá *</label>
                            <div class="star-rating" id="starRating"><span class="star" data-value="1">⭐</span> <span class="star" data-value="2">⭐</span> <span class="star" data-value="3">⭐</span> <span class="star" data-value="4">⭐</span> <span class="star" data-value="5">⭐</span>
                            </div><input type="hidden" id="rating" name="rating" value="5" required>
                        </div>
                    </div>
                    <div class="form-group full-width"><label for="feedback-message">Nội Dung Góp Ý *</label> <textarea id="feedback-message" name="feedback-message" rows="5" required placeholder="Chia sẻ trải nghiệm của bạn về sản phẩm và dịch vụ..."></textarea>
                    </div><button type="submit" class="submit-button"> <span class="button-text">Gửi Góp Ý</span> <span class="button-icon">📤</span> </button>
                </form>
                <div class="success-message" id="successMessage">
                    <div class="success-icon">
                        ✅
                    </div>
                    <h3>Cảm ơn bạn đã góp ý!</h3>
                    <p>Chúng tôi đã nhận được phản hồi của bạn và sẽ xem xét kỹ lưỡng.</p>
                </div>
            </div>
        </section>
    </main>
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
</body>

</html>