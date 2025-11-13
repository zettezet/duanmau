<!DOCTYPE html>
<html lang="vi" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsHub - Trang Tin Tức Hàng Đầu Việt Nam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            box-sizing: border-box;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #667eea 100%);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .breaking-pulse {
            animation: breakingPulse 1.5s infinite;
        }
        
        @keyframes breakingPulse {
            0%, 100% { 
                background-color: #dc2626;
                transform: scale(1);
            }
            50% { 
                background-color: #ef4444;
                transform: scale(1.05);
            }
        }
        
        .slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .ticker {
            animation: ticker 30s linear infinite;
        }
        
        @keyframes ticker {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .category-gradient {
            background: linear-gradient(45deg, #667eea, #764ba2);
        }
        
        .trending-glow {
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.3);
        }
    </style>
</head>
<body class="bg-gray-50 h-full">
    <!-- Top Bar -->
    <div class="bg-gray-900 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-6">
                    <span class="flex items-center">
                        <span class="mr-2">📅</span>
                        <span id="currentDate"></span>
                    </span>
                    <span class="flex items-center">
                        <span class="mr-2">🌡️</span>
                        <span>Hà Nội: 24°C | TP.HCM: 28°C</span>
                    </span>
                    <span class="flex items-center">
                        <span class="mr-2">💱</span>
                        <span>USD: 24,350 VNĐ</span>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-yellow-400 transition-colors">📧 Newsletter</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors">🔔 Thông báo</a>
                    <a href="?c=login" class="hover:text-yellow-400 transition-colors">👤 Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <div class="w-12 h-12 hero-gradient rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white text-2xl font-bold">N</span>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                                NewsHub
                            </h1>
                            <p class="text-xs text-gray-500">Tin tức đáng tin cậy</p>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold animate-pulse">LIVE</span>
                        <span class="ml-2 text-sm text-gray-600">15.2k người đang xem</span>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-blue-600 font-medium transition-colors relative group">
                        Trang chủ
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="index.php?c=danh-sach&id=1" class="text-gray-700 hover:text-blue-600 font-medium transition-colors relative group">
                        Thời sự
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="index.php?c=danh-sach&id=2" class="text-gray-700 hover:text-blue-600 font-medium transition-colors relative group">
                        Kinh tế
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="index.php?c=danh-sach&id=3" class="text-gray-700 hover:text-blue-600 font-medium transition-colors relative group">
                        Thể thao
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="index.php?c=danh-sach&id=4" class="text-gray-700 hover:text-blue-600 font-medium transition-colors relative group">
                        Công nghệ
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    </a>
                </nav>
                
                <!-- Search & Menu -->
                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="Tìm kiếm tin tức..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breaking News Ticker -->
    <div class="breaking-pulse text-white py-3 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex items-center">
                <div class="flex items-center mr-6">
                    <span class="bg-white text-red-600 px-3 py-1 rounded-full font-bold text-sm mr-3">🚨 TIN NÓNG</span>
                    <span class="font-semibold">BREAKING:</span>
                </div>
                <div class="flex-1 overflow-hidden">
                    <div class="ticker whitespace-nowrap">
                        <span class="mr-12">🔥 Chính phủ công bố gói hỗ trợ kinh tế 100.000 tỷ đồng</span>
                        <span class="mr-12">⚡ Giá xăng dầu giảm mạnh 2.000 đồng/lít từ 15h hôm nay</span>
                        <span class="mr-12">🌪️ Bão số 10 đổ bộ miền Trung, sơ tán khẩn cấp 50.000 dân</span>
                        <span class="mr-12">🏆 Đội tuyển Việt Nam vào chung kết SEA Games 32</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in">
                    <h2 class="text-5xl font-bold mb-6 leading-tight">
                        Tin Tức <span class="text-yellow-400">Nóng Hổi</span><br>
                        Cập Nhật <span class="text-yellow-400">24/7</span>
                    </h2>
                    <p class="text-xl mb-8 text-blue-100">
                        Đón đầu xu hướng với những tin tức chính xác, nhanh chóng và đáng tin cậy từ khắp nơi trên thế giới
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Featured Stories -->
        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-gray-800 flex items-center">
                    <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded mr-3"></span>
                    Tin Nổi Bật
                </h2>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                    Xem tất cả
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Featured Article -->
                <div class="lg:col-span-2">
                    <article class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                        <div class="relative">
                            <div class="h-80 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <p class="text-lg">
                                        <img src="
                                        <?php foreach ($posts as $post) {
                                            if ($post['id'] == 1) {
                                                echo $post['image'];
                                        }
                                    }
                                    ?>" width="1000px" alt="">
                                    </p>
                                    <br> <br> <br> <br>
                                </div>
                            </div>
                            <div class="absolute top-6 left-6">
                                <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold trending-glow">
                                    🔥 HOT NHẤT
                                </span>
                            </div>
                            <div class="absolute bottom-6 right-6">
                                <div class="glass-effect text-white px-3 py-1 rounded-full text-sm">
                                    📸 VNA
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center mb-4">
                                <span class="category-gradient text-white px-4 py-1 rounded-full text-sm font-medium mr-3">
                                    <?php
                                    foreach ($posts as $post) {
                                        if ($post['id'] == 1) {
                                            echo $post['list_title'];
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                            <h1 class="text-3xl font-bold text-gray-800 mb-4 hover:text-blue-600 cursor-pointer transition-colors">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 1) {
                                        echo $post['big_title'];
                                    }
                                }
                                ?>
                            </h1>
                            <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 1) {
                                        echo $post['small_title'];
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </article>
                </div>
                
                <!-- Side Articles -->
                <div class="space-y-6">
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <!-- <div class="text-4xl mb-2">📈</div> -->
                                <p class="text-sm">
                                    <img src="
                                     <?php foreach ($posts as $post) {
                                            if ($post['id'] == 2) {
                                                echo $post['image'];
                                        }
                                    }
                                    ?>
                                    " width="1000px" alt="">
                                </p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium mr-2">
                                    <?php
                                    foreach ($posts as $post) {
                                        if ($post['id'] == 2) {
                                            echo $post['list_title'];
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 hover:text-blue-600 cursor-pointer transition-colors">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 2) {
                                        echo $post['big_title'];
                                    }
                                }
                                ?>
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 2) {
                                        echo $post['small_title'];
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </article>
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <!-- <div class="text-4xl mb-2">⚽</div> -->
                                <p class="text-sm">
                                    <img src="
                                     <?php foreach ($posts as $post) {
                                            if ($post['id'] == 3) {
                                                echo $post['image'];
                                        }
                                    }
                                    ?>
                                    " width="1000px" alt="">
                                </p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-xs font-medium mr-2">
                                    <?php
                                    foreach ($posts as $post) {
                                        if ($post['id'] == 3) {
                                            echo $post['list_title'];
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                            <h3 class="font-bold text-gray-800 mb-3 hover:text-blue-600 cursor-pointer transition-colors">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 3) {
                                        echo $post['big_title'];
                                    }
                                }
                                ?>                            
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                <?php
                                foreach ($posts as $post) {
                                    if ($post['id'] == 3) {
                                        echo $post['small_title'];
                                    }
                                }
                                ?>   
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 flex items-center">
                <span class="w-1 h-8 bg-gradient-to-b from-purple-500 to-pink-600 rounded mr-3"></span>
                Chuyên Mục
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <?php foreach($lists as $list): ?>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover cursor-pointer">
                    <h3 class="font-bold text-gray-800 mb-2"><?= $list['title'] ?></h3>
                </div>
                 <?php endforeach ?>
            </div>
        </section>

        <!-- Latest News Grid -->
        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-gray-800 flex items-center">
                    <span class="w-1 h-8 bg-gradient-to-b from-green-500 to-blue-600 rounded mr-3"></span>
                    Tin Mới Nhất
                </h2>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">Tất cả</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">Hôm nay</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">Tuần này</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($posts as $post): ?>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center">
                        <div class="text-center text-white">
                            <img src="<?= $post['image'] ?>" width="1000px" alt="">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full text-xs font-medium mr-2"><?= $post['list_title'] ?></span>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-3 hover:text-blue-600 cursor-pointer transition-colors">
                            <?= $post['big_title']?>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            <?= $post['small_title']?>
                        </p>
                    </div>
                </article>
                <?php endforeach ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 hero-gradient rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white text-2xl font-bold">N</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">NewsHub</h3>
                            <p class="text-sm text-gray-400">Tin tức đáng tin cậy</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6">
                        Nguồn tin tức hàng đầu Việt Nam, cung cấp thông tin chính xác, 
                        nhanh chóng và đáng tin cậy 24/7.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <span>📘</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <span>🐦</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors">
                            <span>📷</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                            <span>📺</span>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Chuyên Mục</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Thời sự</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kinh tế</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Thể thao</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Công nghệ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Giải trí</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Dịch Vụ</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tin nóng</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Video</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Podcast</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Newsletter</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Mobile App</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">RSS Feed</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Liên Hệ</h4>
                    <div class="space-y-3 text-gray-400">
                        <p class="flex items-center">
                            <span class="mr-3">📍</span>
                            123 Đường ABC, Quận 1, TP.Hà Nội
                        </p>
                        <p class="flex items-center">
                            <span class="mr-3">📞</span>
                            (028) 1234 5678
                        </p>
                        <p class="flex items-center">
                            <span class="mr-3">📧</span>
                            info@newshub.vn
                        </p>
                        <p class="flex items-center">
                            <span class="mr-3">🌐</span>
                            www.newshub.vn
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        © 2023 NewsHub. Tất cả quyền được bảo lưu.
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Chính sách bảo mật</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Điều khoản sử dụng</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Liên hệ quảng cáo</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>