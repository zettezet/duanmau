<?php include_once "header.php" ?>

<!-- Hero Banner -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-5xl font-bold mb-4">iPhone 15 Pro Max</h2>
                <p class="text-xl mb-6 opacity-90">Titanium. Mạnh mẽ. Nhẹ nhàng. Pro.</p>
                <div class="flex items-center mb-6">
                    <span class="text-3xl font-bold">29.990.000₫</span>
                    <span class="text-lg line-through opacity-75 ml-4">34.990.000₫</span>
                    <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm ml-4">-14%</span>
                </div>
                <div class="flex space-x-4">
                    <button onclick="addToCart('iPhone 15 Pro Max', 29990000)" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-blue-600 transition-colors">
                        Mua ngay
                    </button>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white bg-opacity-20 rounded-3xl p-8 backdrop-blur-sm">
                    <div class="text-8xl mb-4">📱</div>
                    <p class="text-lg">Trải nghiệm công nghệ tiên tiến</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "flash.php" ?>

<!-- Categories -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Danh mục sản phẩm</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">📱</div>
                <h3 class="font-semibold">Điện thoại</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">💻</div>
                <h3 class="font-semibold">Laptop</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">⌚</div>
                <h3 class="font-semibold">Smartwatch</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">🎧</div>
                <h3 class="font-semibold">Tai nghe</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">📺</div>
                <h3 class="font-semibold">TV</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">🎮</div>
                <h3 class="font-semibold">Gaming</h3>
            </div>
            <div class="category-hover bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="text-4xl mb-3">🏠</div>
                <h3 class="font-semibold">Smarthome</h3>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Sản phẩm nổi bật</h2>
            <a href="#" class="text-blue-600 hover:underline">Xem tất cả →</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <span class="text-6xl">📱</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-sm">-15%</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Samsung Galaxy S24 Ultra</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(128 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">26.990.000₫</span>
                            <span class="text-sm line-through text-gray-500 ml-2">31.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('Samsung Galaxy S24 Ultra', 26990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                        <span class="text-6xl">💻</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-sm">Mới</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">MacBook Air M3 13"</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(89 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">28.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('MacBook Air M3 13', 28990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                        <span class="text-6xl">⌚</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-sm">-20%</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Apple Watch Series 9</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(256 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">9.990.000₫</span>
                            <span class="text-sm line-through text-gray-500 ml-2">12.490.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('Apple Watch Series 9', 9990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                        <span class="text-6xl">🎧</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-orange-500 text-white px-2 py-1 rounded text-sm">Hot</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">AirPods Pro 2</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(342 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">5.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('AirPods Pro 2', 5990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Thương hiệu nổi tiếng</h2>
        <div class="grid grid-cols-3 md:grid-cols-6 gap-6">
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">🍎</div>
                <h3 class="font-semibold">Apple</h3>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">📱</div>
                <h3 class="font-semibold">Samsung</h3>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">🔥</div>
                <h3 class="font-semibold">Xiaomi</h3>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">🎮</div>
                <h3 class="font-semibold">Sony</h3>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">💻</div>
                <h3 class="font-semibold">Dell</h3>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="text-4xl mb-2">⚡</div>
                <h3 class="font-semibold">Asus</h3>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🚚</span>
                </div>
                <h3 class="font-bold mb-2">Miễn phí vận chuyển</h3>
                <p class="text-gray-600 text-sm">Đơn hàng từ 500.000₫</p>
            </div>
            <div class="text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🔄</span>
                </div>
                <h3 class="font-bold mb-2">Đổi trả 30 ngày</h3>
                <p class="text-gray-600 text-sm">Miễn phí đổi trả</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🛡️</span>
                </div>
                <h3 class="font-bold mb-2">Bảo hành chính hãng</h3>
                <p class="text-gray-600 text-sm">Tại các trung tâm bảo hành</p>
            </div>
            <div class="text-center">
                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">💬</span>
                </div>
                <h3 class="font-bold mb-2">Hỗ trợ 24/7</h3>
                <p class="text-gray-600 text-sm">Tư vấn miễn phí</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-12 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Đăng ký nhận ưu đãi</h2>
        <p class="text-lg mb-8 opacity-90">Nhận thông tin sản phẩm mới và khuyến mãi đặc biệt</p>
        <form onsubmit="handleNewsletter(event)" class="max-w-md mx-auto flex">
            <input type="email" placeholder="Nhập email của bạn"
                class="flex-1 px-4 py-3 rounded-l-lg text-gray-800 focus:outline-none">
            <button type="submit" class="bg-yellow-400 text-gray-800 px-6 py-3 rounded-r-lg font-bold hover:bg-yellow-300">
                Đăng ký
            </button>
        </form>
    </div>
</section>

<?php include_once "footer.php" ?>