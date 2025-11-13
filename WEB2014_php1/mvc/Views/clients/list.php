<?php include_once "header.php" ?>

<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="#" class="text-blue-600 hover:underline">Trang chủ</a>
            <span class="text-gray-500">></span>
            <span class="text-gray-700">Điện thoại</span>
        </nav>
    </div>
</section>

<!-- Page Header -->
<section class="bg-white py-8 border-b">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">📱 Điện thoại</h1>
                <p class="text-gray-600">Khám phá bộ sưu tập điện thoại thông minh mới nhất</p>
            </div>
            <div class="text-right">
                <p class="text-sm text-gray-500">Hiển thị 1-12 của 156 sản phẩm</p>
            </div>
        </div>
    </div>
</section>

<!-- Flash Sale -->
<?php include "flash.php" ?>

<!-- Filters & Sort -->
<section class="py-6 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-4">
                <div class="flex items-center">
                    <label class="text-sm font-medium mr-2">Thương hiệu:</label>
                    <select class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                        <option>Tất cả</option>
                        <option>Apple</option>
                        <option>Samsung</option>
                        <option>Xiaomi</option>
                        <option>Oppo</option>
                        <option>Vivo</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label class="text-sm font-medium mr-2">Giá:</label>
                    <select class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                        <option>Tất cả</option>
                        <option>Dưới 5 triệu</option>
                        <option>5-10 triệu</option>
                        <option>10-20 triệu</option>
                        <option>20-30 triệu</option>
                        <option>Trên 30 triệu</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label class="text-sm font-medium mr-2">RAM:</label>
                    <select class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                        <option>Tất cả</option>
                        <option>4GB</option>
                        <option>6GB</option>
                        <option>8GB</option>
                        <option>12GB</option>
                    </select>
                </div>
            </div>

            <!-- Sort -->
            <div class="flex items-center gap-4">
                <div class="flex items-center">
                    <label class="text-sm font-medium mr-2">Sắp xếp:</label>
                    <select class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                        <option>Mới nhất</option>
                        <option>Giá thấp đến cao</option>
                        <option>Giá cao đến thấp</option>
                        <option>Bán chạy nhất</option>
                        <option>Đánh giá cao nhất</option>
                    </select>
                </div>
                <div class="flex border rounded-lg">
                    <button class="px-3 py-2 bg-blue-600 text-white rounded-l-lg">⊞</button>
                    <button class="px-3 py-2 border-l hover:bg-gray-100 rounded-r-lg">☰</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Grid -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($products as $product): ?>
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
                        <a href="<?= BASE_URL . '?c=chi-tiet&id=' . $product['id'] ?>">
                            <h3 class="font-bold text-lg mb-2"><?= $product['name'] ?></h3>
                        </a>
                        <p class="text-sm text-gray-600 mb-2">256GB - Titan Tự Nhiên</p>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                            <span class="text-sm text-gray-500 ml-2">(245 đánh giá)</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <span class="text-xl font-bold text-red-600">29.990.000₫</span>
                                <span class="text-sm line-through text-gray-500 ml-2">34.990.000₫</span>
                            </div>
                        </div>
                        <button onclick="addToCart('iPhone 15 Pro Max', 29990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            🛒 Thêm vào giỏ
                        </button>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center mt-12 space-x-2">
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">‹</button>
            <button class="px-3 py-2 bg-blue-600 text-white rounded-lg">1</button>
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">2</button>
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">3</button>
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">4</button>
            <span class="px-3 py-2">...</span>
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">13</button>
            <button class="px-3 py-2 border rounded-lg hover:bg-gray-100">›</button>
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

<!-- Footer -->
<?php include_once "footer.php" ?>