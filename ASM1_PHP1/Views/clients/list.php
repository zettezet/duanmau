<!DOCTYPE html>
<html lang="vi" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Tin Tức Thời Sự - NewsHub</title>
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
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .featured-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .featured-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        }
        
        .news-category {
            transition: all 0.3s ease;
        }
        
        .news-category:hover {
            transform: scale(1.05);
        }
        
        .filter-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .filter-btn:hover::before {
            left: 100%;
        }
        
        .filter-btn.active {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }
        
        .search-highlight {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: bold;
        }
        
        .load-more-btn {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 50%, #4facfe 100%);
            transition: all 0.3s ease;
        }
        
        .load-more-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        
        .pagination-btn {
            transition: all 0.3s ease;
        }
        
        .pagination-btn:hover {
            transform: scale(1.1);
        }
        
        .pagination-btn.active {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
        }
        
        .sort-dropdown {
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 1px solid #e5e7eb;
        }
        
        .view-toggle {
            background: #f3f4f6;
            border-radius: 12px;
            padding: 4px;
        }
        
        .view-toggle button {
            transition: all 0.3s ease;
            border-radius: 8px;
        }
        
        .view-toggle button.active {
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .list-view .news-grid {
            display: block;
        }
        
        .list-view .news-card {
            display: flex;
            margin-bottom: 1.5rem;
        }
        
        .list-view .news-card .card-image {
            width: 200px;
            height: 120px;
            flex-shrink: 0;
        }
        
        .list-view .news-card .card-content {
            flex: 1;
            padding-left: 1.5rem;
        }
        
        .breaking-badge {
            animation: pulse 2s infinite;
            background: linear-gradient(45deg, #dc2626, #ef4444);
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .hot-badge {
            background: linear-gradient(45deg, #f59e0b, #fbbf24);
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px #f59e0b; }
            to { box-shadow: 0 0 20px #f59e0b, 0 0 30px #f59e0b; }
        }
        
        .verified-badge {
            background: linear-gradient(45deg, #10b981, #34d399);
        }
        
        .exclusive-badge {
            background: linear-gradient(45deg, #8b5cf6, #a78bfa);
        }
        
        .sticky-filters {
            position: sticky;
            top: 80px;
            z-index: 40;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .news-stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 16px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .news-stats::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .reading-time {
            background: rgba(0,0,0,0.1);
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
        }
        
        .bookmark-btn {
            transition: all 0.3s ease;
        }
        
        .bookmark-btn:hover {
            transform: scale(1.2);
        }
        
        .bookmark-btn.bookmarked {
            color: #fbbf24;
        }
        
        .share-btn {
            transition: all 0.3s ease;
        }
        
        .share-btn:hover {
            transform: rotate(15deg) scale(1.1);
        }
        
        .infinite-scroll-loader {
            display: none;
        }
        
        .infinite-scroll-loader.loading {
            display: block;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }
        
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        .weather-widget {
            background: linear-gradient(135deg, #74b9ff 0%, #0984e3 100%);
            color: white;
            border-radius: 16px;
            padding: 1.5rem;
        }
        
        .stock-ticker {
            background: linear-gradient(135deg, #00b894 0%, #00a085 100%);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .stock-item {
            animation: stockTicker 20s linear infinite;
            white-space: nowrap;
        }
        
        @keyframes stockTicker {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
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
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               id="searchInput">
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

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="#" class="text-blue-600 hover:text-blue-800">🏠 Trang chủ</a>
                <span class="text-gray-500">›</span>
                <span class="text-gray-700 font-medium">Danh sách tin tức 
                    <?php foreach ($posts as $post){
                        if ($post['id'] > 5) {
                            echo $post['list_title'];
                        }
                    }
                ?></span>
            </nav>
        </div>
    </div>

    <!-- Page Header -->
    <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-3xl font-bold">
                Tin Tức <span><?= $category['title'] ?></span>
                </h1>
                <p class="text-gray-500 mt-2">
                Cập nhật những tin tức nóng hổi và quan trọng nhất trong ngày
                </p>

                <div class="flex justify-center items-center space-x-8 text-sm">
                    <div class="flex items-center">
                        <span class="mr-2">📊</span>
                        <span>2,847 bài viết</span>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-2">👥</span>
                        <span>156k độc giả</span>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-2">🔄</span>
                        <span>Cập nhật 5 phút trước</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Controls -->
    <div class="sticky-filters py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <!-- View & Sort Controls -->
                <div class="flex items-center gap-4">
                    <!-- View Toggle -->
                    <div class="view-toggle">
                        <button class="active px-3 py-2 text-sm" onclick="setView('grid')" title="Xem dạng lưới">
                            <span class="text-lg">⊞</span>
                        </button>
                        <button class="px-3 py-2 text-sm" onclick="setView('list')" title="Xem dạng danh sách">
                            <span class="text-lg">☰</span>
                        </button>
                    </div>

                    <!-- Sort Dropdown -->
                    <div class="relative">
                        <button class="sort-dropdown px-4 py-2 text-sm font-medium flex items-center gap-2" onclick="toggleSort()">
                            <span>📅 Mới nhất</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="sortDropdown" class="absolute right-0 mt-2 w-48 sort-dropdown hidden z-50">
                            <div class="py-2">
                                <button class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="sortBy('newest')">📅 Mới nhất</button>
                                <button class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="sortBy('oldest')">📅 Cũ nhất</button>
                                <button class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="sortBy('popular')">🔥 Phổ biến</button>
                                <button class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100" onclick="sortBy('trending')">📈 Xu hướng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- News Content -->
            <div class="lg:col-span-3">
                <!-- News Grid -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                            <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded mr-3"></span>
                            📰 Tất Cả Tin Tức
                        </h2>
                        <div class="text-sm text-gray-600">
                            Hiển thị <span class="font-bold">1-12</span> trong <span class="font-bold">2,847</span> bài viết
                        </div>
                    </div>

                    <div id="newsContainer" class="news-grid">
                        <!-- News Card 1 -->
                         <?php foreach ($posts as $post): ?>
                            <article class="news-card card-hover bg-white rounded-xl shadow-lg overflow-hidden" data-category="politics">
                                <a href="<?= BASE_URL . '?c=chi-tiet&id=' . $post['id'] ?>" class="block hover:opacity-90 transition duration-300">
                                    <div class="card-image relative">
                                        <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                                            <div class="text-center text-white">
                                                <a href="<?= BASE_URL . '?c=chi-tiet&id=' . $post['id'] ?>">
                                                    <img src="<?= $post['image'] ?>" width="1000px" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <br> <br>
                                        <div class="absolute top-4 left-4 flex gap-2">
                                            <span class="hot-badge text-white px-2 py-1 rounded-full text-xs font-bold">
                                                <?= $post['list_title'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-content p-6">
                                        <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                            <a href="<?= BASE_URL . '?c=chi-tiet&id=' . $post['id'] ?>"><?= $post['big_title'] ?></a> 
                                        </h3>
                                        <p class="text-gray-600 mb-4 line-clamp-3">
                                            <?= $post['small_title'] ?>
                                        </p>
                                    </div>
                                </a>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>

                <!-- Load More / Pagination -->
                <div class="text-center mb-8">
                    <button class="load-more-btn text-white px-8 py-4 rounded-xl font-medium mb-6" onclick="loadMoreNews()">
                        <span class="flex items-center justify-center">
                            <span class="mr-2">📰</span>
                            <span>Xem thêm tin tức</span>
                        </span>
                    </button>
                    
                    <!-- Pagination -->
                    <div class="flex justify-center items-center space-x-2">
                        <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                            <span>‹</span>
                        </button>
                        <button class="pagination-btn active w-10 h-10 rounded-lg flex items-center justify-center">1</button>
                        <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-100">2</button>
                        <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-100">3</button>
                        <span class="text-gray-500">...</span>
                        <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-100">237</button>
                        <button class="pagination-btn w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-100">
                            <span>›</span>
                        </button>
                    </div>
                </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 mt-16">
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
</body>
</html>
