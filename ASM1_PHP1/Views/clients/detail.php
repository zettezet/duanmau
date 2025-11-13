<!DOCTYPE html>
<html lang="vi" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án làm sạch sông Tô Lịch đạt hiệu quả tích cực - NewsHub</title>
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
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
            animation: ticker 35s linear infinite;
        }
        
        @keyframes ticker {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        .article-content {
            line-height: 1.8;
        }
        
        .article-content h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 2rem 0 1rem 0;
            color: #1f2937;
        }
        
        .article-content h3 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 1.5rem 0 0.75rem 0;
            color: #374151;
        }
        
        .article-content p {
            margin-bottom: 1.5rem;
            color: #4b5563;
        }
        
        .article-content ul, .article-content ol {
            margin: 1.5rem 0;
            padding-left: 2rem;
        }
        
        .article-content li {
            margin-bottom: 0.5rem;
            color: #4b5563;
        }
        
        .article-content blockquote {
            border-left: 4px solid #10b981;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #6b7280;
            background: #f0fdf4;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }
        
        .article-content img {
            width: 100%;
            height: auto;
            border-radius: 0.75rem;
            margin: 2rem 0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .social-share {
            position: sticky;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .share-btn {
            transition: all 0.3s ease;
        }
        
        .share-btn:hover {
            transform: scale(1.1);
        }
        
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #10b981, #059669);
            z-index: 9999;
            transition: width 0.3s ease;
        }
        
        .comment-form {
            background: #f9fafb;
            border-radius: 1rem;
            padding: 2rem;
            margin-top: 2rem;
        }
        
        .comment-item {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border: 1px solid #e5e7eb;
        }
        
        .tag-item {
            background: #dcfce7;
            color: #166534;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .tag-item:hover {
            background: #bbf7d0;
            transform: scale(1.05);
        }
        
        .related-article {
            transition: all 0.3s ease;
        }
        
        .related-article:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .author-card {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border-radius: 1rem;
            padding: 2rem;
            margin: 2rem 0;
        }
        
        .toc-item {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .toc-item:hover {
            background: #f3f4f6;
            padding-left: 1rem;
        }
        
        .toc-item:last-child {
            border-bottom: none;
        }
        
        .newsletter-box {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border-radius: 1rem;
            padding: 2rem;
            margin: 2rem 0;
        }
        
        .breadcrumb-item {
            transition: all 0.3s ease;
        }
        
        .breadcrumb-item:hover {
            color: #10b981;
        }
        
        .progress-chart {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 1rem;
            padding: 2rem;
            color: white;
            margin: 2rem 0;
        }
        
        .stat-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: #10b981;
            border-radius: 50%;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 1.25rem;
            width: 2px;
            height: calc(100% + 1rem);
            background: #d1fae5;
        }
        
        .timeline-item:last-child::after {
            display: none;
        }
        
        .water-quality-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
        
        .quality-good { background: #10b981; }
        .quality-fair { background: #f59e0b; }
        .quality-poor { background: #ef4444; }
    </style>
</head>
<body class="bg-gray-50 h-full">
    <!-- Reading Progress Bar -->
    <div class="reading-progress"></div>

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
                        <span>Hà Nội: 26°C</span>
                    </span>
                    <span class="flex items-center">
                        <span class="mr-2">💧</span>
                        <span>Chất lượng nước: Cải thiện</span>
                    </span>
                    <span class="flex items-center">
                        <span class="mr-2">🌱</span>
                        <span>AQI: 85 (Tốt)</span>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-blue-400 transition-colors">📧 Đăng ký nhận tin</a>
                    <a href="#" class="hover:text-green-400 transition-colors">📱 Ứng dụng</a>
                    <a href="?c=login" class="hover:text-purple-400 transition-colors">👤 Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
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
    <div class="bg-green-600 text-white py-3 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex items-center">
                <div class="flex items-center mr-6">
                    <span class="bg-white text-green-600 px-3 py-1 rounded-full font-bold text-sm mr-3">🌱 MÔI TRƯỜNG</span>
                    <span class="font-semibold">TIN NÓNG:</span>
                </div>
                <div class="flex-1 overflow-hidden">
                    <div class="ticker whitespace-nowrap">
                        <span class="mr-12">💧 Sông Tô Lịch: Chất lượng nước cải thiện 70% sau 6 tháng áp dụng công nghệ Nhật</span>
                        <span class="mr-12">🌿 Hà Nội trồng thêm 1 triệu cây xanh trong năm 2024</span>
                        <span class="mr-12">♻️ Dự án xử lý rác thải nhựa bằng công nghệ AI chính thức khởi động</span>
                        <span class="mr-12">🏭 100% khu công nghiệp Hà Nội đạt tiêu chuẩn xanh vào năm 2025</span>
                        <span class="mr-12">🚲 Hệ thống xe đạp công cộng mở rộng thêm 50 điểm trong nội thành</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="#" class="breadcrumb-item text-green-600 hover:text-green-800">Trang chủ</a>
                <span class="text-gray-500">›</span>
                <a href="#" class="breadcrumb-item text-green-600 hover:text-green-800"><?= $post['list_title']; ?></a>
                <span class="text-gray-500">›</span>
                <span class="text-gray-700 font-medium"><?= $post['big_title']; ?></span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Article Content -->
            <div class="lg:col-span-2">
                <!-- Article Header -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                    <div class="p-8">

                        <!-- Title -->
                        <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">
                            <?= $post['big_title']; ?>
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            <?= $post['small_title']; ?>
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-8">
                            <div class="h-96 bg-gradient-to-r from-green-500 via-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                                <div class="text-center text-white">
                                    <!-- <div class="text-6xl mb-4">🌊</div> -->
                                    <!-- <p class="text-xl font-medium">Sông Tô Lịch - Dự án làm sạch</p>
                                    <p class="text-sm opacity-80 mt-2">Công nghệ Nhật Bản mang lại hiệu quả tích cực</p> -->
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-2 text-center italic">
                                Sông Tô Lịch sau 6 tháng triển khai dự án làm sạch bằng công nghệ Nhật Bản
                            </p>
                        </div>

                        <!-- Progress Statistics -->
                        <div class="progress-chart mb-8">
                            <!-- <h3 class="text-xl font-bold mb-4 text-center">📊 Kết quả sau 6 tháng triển khai</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold">70%</div>
                                    <div class="text-sm opacity-90">Cải thiện chất lượng nước</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold">85%</div>
                                    <div class="text-sm opacity-90">Giảm mùi hôi</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold">12km</div>
                                    <div class="text-sm opacity-90">Chiều dài xử lý</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold">95%</div>
                                    <div class="text-sm opacity-90">Hài lòng của dân</div>
                                </div>
                            </div> -->
                        </div>

                        <!-- Article Content -->
                        <div class="article-content">
                            <p>
                                <strong>Hà Nội</strong> - Dự án làm sạch sông Tô Lịch bằng công nghệ Nhật Bản đã bước vào 
                                tháng thứ 6 triển khai và đang cho thấy những kết quả rất khả quan. Chất lượng nước đã 
                                cải thiện đáng kể, mùi hôi giảm mạnh và hệ sinh thái sông bắt đầu phục hồi.
                            </p>

                            <p>
                                Theo báo cáo mới nhất từ Ban Quản lý dự án, các chỉ số môi trường của sông Tô Lịch đã 
                                có những thay đổi tích cực rõ rệt. Đặc biệt, hàm lượng oxy hòa tan (DO) đã tăng từ 
                                0.5mg/l lên 4.2mg/l, đạt tiêu chuẩn cho phép của nước mặt loại B1.
                            </p>

                            <h2>🔬 Công nghệ tiên tiến từ Nhật Bản</h2>

                            <p>
                                Dự án sử dụng công nghệ xử lý nước thải tiên tiến của Nhật Bản, bao gồm hệ thống 
                                vi sinh vật hiếu khí và kỵ khí kết hợp, giúp phân hủy các chất hữu cơ và loại bỏ 
                                các chất gây ô nhiễm một cách hiệu quả.
                            </p>

                            <blockquote>
                                "Đây là một bước tiến quan trọng trong việc cải thiện môi trường sống của người dân 
                                Hà Nội. Công nghệ Nhật Bản đã chứng minh hiệu quả vượt trội trong việc xử lý ô nhiễm 
                                nguồn nước."
                                <br><em>- Ông Nguyễn Văn Minh, Giám đốc Ban Quản lý dự án</em>
                            </blockquote>

                            <p>
                                Hệ thống bao gồm 15 trạm xử lý nước thải tự động được lắp đặt dọc theo sông, 
                                mỗi trạm có khả năng xử lý từ 500-1000m³ nước thải mỗi ngày. Các trạm này hoạt động 
                                24/7 và được giám sát từ xa thông qua hệ thống IoT hiện đại.
                            </p>

                            <h2>📈 Kết quả đáng khích lệ</h2>

                            <p>
                                Sau 6 tháng triển khai, các chỉ số quan trọng đều cho thấy xu hướng cải thiện tích cực:
                            </p>

                            <ul>
                                <li><strong>Chất lượng nước:</strong> Cải thiện 70% so với thời điểm ban đầu</li>
                                <li><strong>Hàm lượng BOD:</strong> Giảm từ 45mg/l xuống 12mg/l</li>
                                <li><strong>Hàm lượng COD:</strong> Giảm từ 120mg/l xuống 35mg/l</li>
                                <li><strong>Độ đục:</strong> Giảm từ 150 NTU xuống 25 NTU</li>
                                <li><strong>Mùi hôi:</strong> Giảm 85% theo đánh giá của người dân</li>
                            </ul>

                            <h3>🐟 Hệ sinh thái dần phục hồi</h3>

                            <p>
                                Một trong những dấu hiệu tích cực nhất là sự xuất hiện trở lại của các loài cá nhỏ 
                                và thực vật thủy sinh trong một số đoạn sông. Điều này cho thấy hệ sinh thái đang 
                                dần được phục hồi sau nhiều năm ô nhiễm nặng.
                            </p>

                            <p>
                                Các chuyên gia môi trường nhận định rằng nếu duy trì được hiệu quả như hiện tại, 
                                sông Tô Lịch có thể trở thành một dòng sông sạch, đóng góp tích cực vào cảnh quan 
                                đô thị và chất lượng cuộc sống của người dân Hà Nội.
                            </p>

                            <h2>👥 Phản hồi tích cực từ người dân</h2>

                            <p>
                                Cuộc khảo sát gần đây với 1,200 hộ dân sống gần sông Tô Lịch cho thấy 95% người dân 
                                hài lòng với kết quả của dự án. Nhiều người cho biết mùi hôi đã giảm đáng kể, đặc biệt 
                                vào mùa hè.
                            </p>

                            <p>
                                Bà Nguyễn Thị Lan, 65 tuổi, sống tại phường Láng Thượng chia sẻ: "Tôi sống ở đây 
                                hơn 30 năm, chưa bao giờ thấy sông sạch như bây giờ. Mùi hôi hầu như không còn, 
                                cửa sổ nhà tôi giờ có thể mở thoải mái."
                            </p>

                            <h3>💰 Hiệu quả kinh tế</h3>

                            <p>
                                Dự án không chỉ mang lại lợi ích môi trường mà còn tạo ra giá trị kinh tế đáng kể. 
                                Giá trị bất động sản khu vực ven sông đã tăng trung bình 15-20% so với trước khi 
                                triển khai dự án.
                            </p>

                            <p>
                                Ngoài ra, việc cải thiện môi trường sống cũng góp phần thu hút đầu tư và phát triển 
                                du lịch sinh thái trong khu vực, tạo thêm việc làm cho người dân địa phương.
                            </p>

                            <h2>🎯 Kế hoạch giai đoạn tiếp theo</h2>

                            <p>
                                Trong 6 tháng tới, dự án sẽ tiếp tục mở rộng quy mô với việc lắp đặt thêm 10 trạm 
                                xử lý nước thải và triển khai hệ thống giám sát chất lượng nước tự động 24/7.
                            </p>

                            <p>
                                Đồng thời, các hoạt động tuyên truyền nâng cao ý thức bảo vệ môi trường của người dân 
                                cũng sẽ được tăng cường, nhằm duy trì và phát huy kết quả đã đạt được.
                            </p>

                            <h3>🌍 Ý nghĩa với môi trường đô thị</h3>

                            <p>
                                Thành công của dự án làm sạch sông Tô Lịch không chỉ có ý nghĩa với Hà Nội mà còn 
                                là mô hình điển hình cho các đô thị lớn khác trong việc xử lý ô nhiễm nguồn nước. 
                                Đây là bước đệm quan trọng hướng tới mục tiêu xây dựng thành phố xanh, bền vững.
                            </p>

                            <p>
                                Với kết quả khả quan này, Hà Nội đang cân nhắc mở rộng áp dụng công nghệ tương tự 
                                cho các sông, hồ khác trong nội thành như sông Nhuệ, sông Đáy và các hồ điều hòa.
                            </p>
                        </div>
                        <!-- Article Actions -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <button class="flex items-center space-x-2 bg-green-100 text-green-800 px-4 py-2 rounded-lg hover:bg-green-200 transition-colors" onclick="likeArticle()">
                                        <span>👍</span>
                                        <span class="font-medium">Thích</span>
                                        <span class="bg-green-200 text-green-800 px-2 py-1 rounded-full text-xs">892</span>
                                    </button>
                                    <button class="flex items-center space-x-2 bg-blue-100 text-blue-800 px-4 py-2 rounded-lg hover:bg-blue-200 transition-colors" onclick="scrollToComments()">
                                        <span>💬</span>
                                        <span class="font-medium">Bình luận</span>
                                        <span class="bg-blue-200 text-blue-800 px-2 py-1 rounded-full text-xs">234</span>
                                    </button>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="p-2 text-gray-500 hover:text-red-500 transition-colors" onclick="reportArticle()" title="Báo cáo">
                                        <span class="text-lg">🚩</span>
                                    </button>
                                    <button class="p-2 text-gray-500 hover:text-blue-500 transition-colors" onclick="printArticle()" title="In bài viết">
                                        <span class="text-lg">🖨️</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Comments Section -->
                <div id="comments" class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">💬 Bình luận (234)</h2>
                    
                    <!-- Comment Form -->
                    <div class="comment-form mb-8">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Chia sẻ ý kiến của bạn</h3>
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <input type="text" placeholder="Họ và tên *" 
                                       class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <input type="email" placeholder="Email *" 
                                       class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <textarea placeholder="Nội dung bình luận *" rows="4" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent mb-4"></textarea>
                            <div class="flex items-center justify-between">
                                <label class="flex items-center text-sm text-gray-600">
                                    <input type="checkbox" class="mr-2">
                                    Nhận thông báo khi có phản hồi
                                </label>
                                <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-700 transition-colors">
                                    Gửi bình luận
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-6">
                        <!-- Comment 1 -->
                        <div class="comment-item">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">HL</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="font-bold text-gray-900">Hoàng Long</span>
                                        <span class="text-sm text-gray-500">1 giờ trước</span>
                                    </div>
                                    <p class="text-gray-700 mb-3">
                                        Thật tuyệt vời! Tôi sống gần sông Tô Lịch và thấy sự thay đổi rõ rệt. 
                                        Mùi hôi giảm nhiều, nước trong hơn. Hy vọng dự án sẽ tiếp tục thành công!
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button class="text-green-600 hover:text-green-800 flex items-center">
                                            <span class="mr-1">👍</span>
                                            <span>Thích (18)</span>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">Trả lời</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load More Comments -->
                    <div class="text-center mt-8">
                        <button class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                            Xem thêm bình luận
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-1">
                <!-- Related Articles -->
                <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-1 h-6 bg-gradient-to-b from-green-500 to-blue-600 rounded mr-3"></span>
                        📰 Tin liên quan
                    </h3>
                    <div class="space-y-4">
                        <!-- Related Article 1 -->
                        <article class="related-article cursor-pointer">
                            <div class="flex space-x-3">
                                <div class="w-20 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">🌊</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-gray-800 mb-1 line-clamp-2">
                                        Hà Nội triển khai dự án xử lý nước thải tại 15 quận, huyện
                                    </h4>
                                    <p class="text-xs text-gray-500">1 ngày trước • 🌱 Môi trường</p>
                                </div>
                            </div>
                        </article>

                        <!-- Related Article 2 -->
                        <article class="related-article cursor-pointer">
                            <div class="flex space-x-3">
                                <div class="w-20 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">🏭</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-gray-800 mb-1 line-clamp-2">
                                        Công nghệ xử lý nước thải từ Nhật Bản: Hiệu quả và bền vững
                                    </h4>
                                    <p class="text-xs text-gray-500">2 ngày trước • 🔬 Công nghệ</p>
                                </div>
                            </div>
                        </article>

                        <!-- Related Article 3 -->
                        <article class="related-article cursor-pointer">
                            <div class="flex space-x-3">
                                <div class="w-20 h-16 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">🌿</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-gray-800 mb-1 line-clamp-2">
                                        Hệ sinh thái sông Hồng: Những dấu hiệu phục hồi tích cực
                                    </h4>
                                    <p class="text-xs text-gray-500">3 ngày trước • 🌱 Môi trường</p>
                                </div>
                            </div>
                        </article>

                        <!-- Related Article 4 -->
                        <article class="related-article cursor-pointer">
                            <div class="flex space-x-3">
                                <div class="w-20 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">🏙️</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-gray-800 mb-1 line-clamp-2">
                                        Hà Nội hướng tới thành phố xanh: Kế hoạch 2025-2030
                                    </h4>
                                    <p class="text-xs text-gray-500">1 tuần trước • 🏙️ Đô thị</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Environmental News -->
                <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <span class="mr-2">🌱</span>
                        Tin môi trường nổi bật
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">1</span>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800 mb-1">
                                    Việt Nam cam kết đạt Net Zero vào năm 2050
                                </h4>
                                <p class="text-xs text-gray-500">👁️ 15.3k lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">2</span>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800 mb-1">
                                    Dự án rừng đô thị: Trồng 1 triệu cây xanh tại TP.HCM
                                </h4>
                                <p class="text-xs text-gray-500">👁️ 12.8k lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-purple-500 text-white text-xs font-bold px-2 py-1 rounded">3</span>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800 mb-1">
                                    Công nghệ AI giúp giám sát chất lượng không khí
                                </h4>
                                <p class="text-xs text-gray-500">👁️ 9.7k lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">4</span>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800 mb-1">
                                    Năng lượng tái tạo: Việt Nam dẫn đầu Đông Nam Á
                                </h4>
                                <p class="text-xs text-gray-500">👁️ 8.2k lượt xem</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <span class="mr-2">🔗</span>
                        Liên kết hữu ích
                    </h3>
                    <div class="space-y-3">
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            🌊 Theo dõi chất lượng nước sông
                        </a>
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            📊 Báo cáo môi trường hàng tháng
                        </a>
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            🔬 Công nghệ xử lý nước thải
                        </a>
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            🌱 Dự án môi trường đô thị
                        </a>
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            📱 Ứng dụng giám sát môi trường
                        </a>
                        <a href="#" class="block text-sm text-gray-600 hover:text-green-600 transition-colors">
                            🎯 Mục tiêu phát triển bền vững
                        </a>
                    </div>
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
                        Nguồn tin tức uy tín hàng đầu Việt Nam, cập nhật thông tin 
                        nhanh chóng và chính xác 24/7.
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Môi trường</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Khoa học</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Công nghệ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Đô thị</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sức khỏe</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Dịch Vụ</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tin tức nóng</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Báo cáo chuyên sâu</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Video tin tức</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Podcast môi trường</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Infographic</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Ứng dụng di động</a></li>
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
                            contact@newshub.vn
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
                        © 2024 NewsHub. Tất cả quyền được bảo lưu.
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
