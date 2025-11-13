<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Siêu thị công nghệ hàng đầu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <!-- Top bar -->
            <div class="flex justify-between items-center py-2 text-sm border-b">
                <div class="flex items-center space-x-4 text-gray-600">
                    <span>📞 Hotline: 1900-1234</span>
                    <span>🚚 Miễn phí vận chuyển đơn từ 500K</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600">Đăng nhập</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">Đăng ký</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">Theo dõi đơn hàng</a>
                </div>
            </div>

            <!-- Main header -->
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <h1 class="text-3xl font-bold text-blue-600">🔥 TechStore</h1>
                    <span class="ml-2 text-sm text-gray-500">Công nghệ cho mọi nhà</span>
                </div>

                <!-- Search -->
                <div class="flex-1 max-w-2xl mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Tìm kiếm sản phẩm, thương hiệu..."
                            class="w-full px-4 py-3 border-2 rounded-lg focus:outline-none focus:border-blue-500">
                        <button class="absolute right-2 top-2 bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                            🔍
                        </button>
                    </div>
                </div>

                <!-- Cart & User -->
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:text-blue-600">
                        ❤️
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                    <button onclick="addToCart()" class="relative p-2 text-gray-600 hover:text-blue-600" id="cart-btn">
                        🛒
                        <span class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center" id="cart-count">0</span>
                    </button>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="py-3 border-t">
                <ul class="flex space-x-8 text-gray-700">
                    <li><a href="#" class="hover:text-blue-600 font-medium flex items-center">📱 Điện thoại</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">💻 Laptop</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">⌚ Đồng hồ thông minh</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">🎧 Tai nghe</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">📺 TV & Màn hình</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">🎮 Gaming</a></li>
                    <li><a href="#" class="hover:text-blue-600 flex items-center">🏠 Smarthome</a></li>
                </ul>
            </nav>
        </div>
    </header>