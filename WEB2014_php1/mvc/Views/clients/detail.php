<?php include_once "header.php" ?>

<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="#" class="text-blue-600 hover:underline">Trang chủ</a>
            <span class="text-gray-500">></span>
            <a href="#" class="text-blue-600 hover:underline">Điện thoại</a>
            <span class="text-gray-500">></span>
            <a href="#" class="text-blue-600 hover:underline">Apple</a>
            <span class="text-gray-500">></span>
            <span class="text-gray-700">iPhone 15 Pro Max</span>
        </nav>
    </div>
</section>

<!-- Flash Sale -->
<?php include_once "flash.php" ?>

<!-- Product Detail -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <div class="zoom-effect mb-6">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg p-8 text-center h-96 flex items-center justify-center main-image">
                        <span class="text-9xl">📱</span>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="thumbnail border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500">
                        <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded h-16 flex items-center justify-center">
                            <span class="text-2xl">📱</span>
                        </div>
                    </div>
                    <div class="thumbnail border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded h-16 flex items-center justify-center">
                            <span class="text-2xl">📱</span>
                        </div>
                    </div>
                    <div class="thumbnail border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded h-16 flex items-center justify-center">
                            <span class="text-2xl">📱</span>
                        </div>
                    </div>
                    <div class="thumbnail border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded h-16 flex items-center justify-center">
                            <span class="text-2xl">📱</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <div class="mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm">🔥 Bán chạy nhất</span>
                    <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm ml-2">✓ Chính hãng</span>
                </div>

                <h1 class="text-3xl font-bold mb-4"><?= $product['name'] ?></h1>
                <p class="text-gray-600 mb-4">256GB - Titan Tự Nhiên | Chính hãng VN/A</p>

                <!-- Rating -->
                <div class="flex items-center mb-6">
                    <div class="flex items-center">
                        <span class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</span>
                        <span class="ml-2 text-gray-600">(4.8/5)</span>
                    </div>
                    <span class="mx-4 text-gray-300">|</span>
                    <span class="text-gray-600">245 đánh giá</span>
                    <span class="mx-4 text-gray-300">|</span>
                    <span class="text-gray-600">Đã bán: 1,234</span>
                </div>

                <!-- Price -->
                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <span class="text-4xl font-bold text-red-600">29.990.000₫</span>
                        <span class="text-xl line-through text-gray-500 ml-4">34.990.000₫</span>
                    </div>
                    <div class="flex items-center">
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-bold">Tiết kiệm 5.000.000₫</span>
                        <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-bold ml-2">-14%</span>
                    </div>
                </div>

                <!-- Color Options -->
                <div class="mb-6">
                    <h3 class="font-bold mb-3">Màu sắc:</h3>
                    <div class="flex space-x-3">
                        <button class="w-12 h-12 rounded-full bg-gray-300 border-4 border-blue-500"></button>
                        <button class="w-12 h-12 rounded-full bg-blue-900 border-2 border-gray-300"></button>
                        <button class="w-12 h-12 rounded-full bg-white border-2 border-gray-300"></button>
                        <button class="w-12 h-12 rounded-full bg-black border-2 border-gray-300"></button>
                    </div>
                </div>

                <!-- Storage Options -->
                <div class="mb-6">
                    <h3 class="font-bold mb-3">Dung lượng:</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="border-2 border-gray-300 rounded-lg p-3 text-center hover:border-blue-500">
                            <div class="font-bold">128GB</div>
                            <div class="text-sm text-gray-600">27.990.000₫</div>
                        </button>
                        <button class="border-2 border-blue-500 bg-blue-50 rounded-lg p-3 text-center">
                            <div class="font-bold text-blue-600">256GB</div>
                            <div class="text-sm text-blue-600">29.990.000₫</div>
                        </button>
                        <button class="border-2 border-gray-300 rounded-lg p-3 text-center hover:border-blue-500">
                            <div class="font-bold">512GB</div>
                            <div class="text-sm text-gray-600">35.990.000₫</div>
                        </button>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="mb-6">
                    <h3 class="font-bold mb-3">Số lượng:</h3>
                    <div class="flex items-center space-x-4">
                        <div class="flex border rounded-lg">
                            <button onclick="decreaseQuantity()" class="px-4 py-2 hover:bg-gray-100">-</button>
                            <span class="px-4 py-2 border-x" id="quantity">1</span>
                            <button onclick="increaseQuantity()" class="px-4 py-2 hover:bg-gray-100">+</button>
                        </div>
                        <span class="text-gray-600">Còn lại: 47 sản phẩm</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex space-x-4 mb-6">
                    <button onclick="addToCart('iPhone 15 Pro Max', 29990000)" class="flex-1 bg-blue-600 text-white py-4 rounded-lg font-bold hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ hàng
                    </button>
                    <button class="flex-1 bg-red-600 text-white py-4 rounded-lg font-bold hover:bg-red-700 transition-colors">
                        Mua ngay
                    </button>
                    <button class="px-6 py-4 border-2 border-gray-300 rounded-lg hover:border-red-500 hover:text-red-500">
                        ❤️
                    </button>
                </div>

                <!-- Promotions -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <h4 class="font-bold text-yellow-800 mb-2">🎁 Ưu đãi đặc biệt:</h4>
                    <ul class="text-sm text-yellow-700 space-y-1">
                        <li>• Tặng ốp lưng chính hãng Apple (trị giá 1.290.000₫)</li>
                        <li>• Miễn phí cường lực cao cấp</li>
                        <li>• Trả góp 0% lãi suất 12 tháng</li>
                        <li>• Thu cũ đổi mới giá cao</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Tabs -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Tab Navigation -->
        <div class="flex border-b mb-8">
            <button onclick="showTab('specs')" class="tab-btn px-6 py-3 font-bold border-b-2 border-blue-600 text-blue-600">
                Thông số kỹ thuật
            </button>
            <button onclick="showTab('description')" class="tab-btn px-6 py-3 font-bold text-gray-600 hover:text-blue-600">
                Mô tả sản phẩm
            </button>
            <button onclick="showTab('reviews')" class="tab-btn px-6 py-3 font-bold text-gray-600 hover:text-blue-600">
                Đánh giá (245)
            </button>
            <button onclick="showTab('warranty')" class="tab-btn px-6 py-3 font-bold text-gray-600 hover:text-blue-600">
                Bảo hành
            </button>
        </div>

        <!-- Tab Content -->
        <div id="specs" class="tab-content">
            <div class="bg-white rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold text-lg mb-4">Thông tin chung</h3>
                        <table class="w-full text-sm">
                            <tr class="border-b">
                                <td class="py-2 font-medium">Thương hiệu:</td>
                                <td class="py-2">Apple</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Model:</td>
                                <td class="py-2">iPhone 15 Pro Max</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Màn hình:</td>
                                <td class="py-2">6.7" Super Retina XDR OLED</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Độ phân giải:</td>
                                <td class="py-2">2796 x 1290 pixels</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Tần số quét:</td>
                                <td class="py-2">120Hz ProMotion</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-4">Hiệu năng & Camera</h3>
                        <table class="w-full text-sm">
                            <tr class="border-b">
                                <td class="py-2 font-medium">Chip xử lý:</td>
                                <td class="py-2">Apple A17 Pro</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">RAM:</td>
                                <td class="py-2">8GB</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Camera chính:</td>
                                <td class="py-2">48MP + 12MP + 12MP</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Camera trước:</td>
                                <td class="py-2">12MP TrueDepth</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-medium">Pin:</td>
                                <td class="py-2">4441mAh</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="description" class="tab-content hidden">
            <div class="bg-white rounded-lg p-6">
                <h3 class="font-bold text-xl mb-4">iPhone 15 Pro Max - Đỉnh cao công nghệ</h3>
                <div class="prose max-w-none">
                    <p class="mb-4">iPhone 15 Pro Max là chiếc smartphone cao cấp nhất trong dòng iPhone 15 series, mang đến trải nghiệm hoàn hảo với thiết kế titan cao cấp và hiệu năng vượt trội.</p>

                    <h4 class="font-bold text-lg mb-2">Thiết kế titan sang trọng</h4>
                    <p class="mb-4">Với khung viền được làm từ titan hàng không vũ trụ, iPhone 15 Pro Max không chỉ bền bỉ mà còn nhẹ hơn 19g so với thế hệ trước, mang lại cảm giác cầm nắm thoải mái.</p>

                    <h4 class="font-bold text-lg mb-2">Camera Pro 48MP đột phá</h4>
                    <p class="mb-4">Hệ thống camera Pro với cảm biến chính 48MP, zoom quang học 5x và khả năng quay video 4K ProRes, giúp bạn ghi lại mọi khoảnh khắc với chất lượng chuyên nghiệp.</p>

                    <h4 class="font-bold text-lg mb-2">Chip A17 Pro mạnh mẽ</h4>
                    <p class="mb-4">Chip A17 Pro với tiến trình 3nm tiên tiến mang đến hiệu năng vượt trội, xử lý mọi tác vụ một cách mượt mà và tiết kiệm pin hiệu quả.</p>
                </div>
            </div>
        </div>

        <div id="reviews" class="tab-content hidden">
            <div class="bg-white rounded-lg p-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Rating Summary -->
                    <div class="text-center">
                        <div class="text-5xl font-bold text-blue-600 mb-2">4.8</div>
                        <div class="text-yellow-400 text-2xl mb-2">⭐⭐⭐⭐⭐</div>
                        <div class="text-gray-600">245 đánh giá</div>

                        <div class="mt-6 space-y-2">
                            <div class="flex items-center text-sm">
                                <span class="w-8">5⭐</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                                <span class="w-8">85%</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="w-8">4⭐</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 12%"></div>
                                </div>
                                <span class="w-8">12%</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="w-8">3⭐</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 2%"></div>
                                </div>
                                <span class="w-8">2%</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="w-8">2⭐</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                                </div>
                                <span class="w-8">1%</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="w-8">1⭐</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="w-8">0%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews List -->
                    <div class="lg:col-span-2 space-y-6">
                        <div class="border-b pb-6">
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">N</div>
                                <div class="ml-3">
                                    <div class="font-bold">Nguyễn Văn A</div>
                                    <div class="text-sm text-gray-500">2 ngày trước</div>
                                </div>
                                <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                            </div>
                            <p class="text-gray-700">Máy rất đẹp, camera chụp ảnh cực kỳ sắc nét. Pin trâu, dùng cả ngày không lo hết pin. Rất hài lòng với sản phẩm!</p>
                        </div>

                        <div class="border-b pb-6">
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">T</div>
                                <div class="ml-3">
                                    <div class="font-bold">Trần Thị B</div>
                                    <div class="text-sm text-gray-500">5 ngày trước</div>
                                </div>
                                <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                            </div>
                            <p class="text-gray-700">Thiết kế titan rất sang trọng, cầm nắm chắc tay. Màn hình sáng đẹp, màu sắc sống động. Đáng đồng tiền bát gạo!</p>
                        </div>

                        <div class="border-b pb-6">
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">L</div>
                                <div class="ml-3">
                                    <div class="font-bold">Lê Minh C</div>
                                    <div class="text-sm text-gray-500">1 tuần trước</div>
                                </div>
                                <div class="ml-auto text-yellow-400">⭐⭐⭐⭐⭐</div>
                            </div>
                            <p class="text-gray-700">Hiệu năng mạnh mẽ, chơi game mượt mà. Camera zoom xa rất ấn tượng. Giao hàng nhanh, đóng gói cẩn thận.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="warranty" class="tab-content hidden">
            <div class="bg-white rounded-lg p-6">
                <h3 class="font-bold text-xl mb-4">Chính sách bảo hành</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-green-500 mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">Bảo hành chính hãng 12 tháng</h4>
                            <p class="text-gray-600">Bảo hành tại các trung tâm bảo hành ủy quyền của Apple trên toàn quốc</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">Đổi mới trong 30 ngày đầu</h4>
                            <p class="text-gray-600">Nếu phát hiện lỗi từ nhà sản xuất trong 30 ngày đầu sử dụng</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">Hỗ trợ kỹ thuật miễn phí</h4>
                            <p class="text-gray-600">Tư vấn và hỗ trợ kỹ thuật 24/7 qua hotline và chat online</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">Bảo hành mở rộng</h4>
                            <p class="text-gray-600">Có thể mua thêm gói bảo hành mở rộng AppleCare+ với nhiều ưu đãi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">Sản phẩm liên quan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Related Product 1 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                        <span class="text-6xl">📱</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-sm">Mới</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">iPhone 15 Pro</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(189 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">26.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('iPhone 15 Pro', 26990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Related Product 2 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                        <span class="text-6xl">📱</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-sm">-15%</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">iPhone 14 Pro Max</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(312 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">24.990.000₫</span>
                            <span class="text-sm line-through text-gray-500 ml-2">29.390.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('iPhone 14 Pro Max', 24990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Related Product 3 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                        <span class="text-6xl">📱</span>
                    </div>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">iPhone 15</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(156 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">22.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('iPhone 15', 22990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>

            <!-- Related Product 4 -->
            <div class="product-card bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                    <div class="h-48 bg-gradient-to-br from-orange-100 to-orange-200 flex items-center justify-center">
                        <span class="text-6xl">📱</span>
                    </div>
                    <span class="absolute top-2 left-2 bg-orange-500 text-white px-2 py-1 rounded text-sm">Hot</span>
                    <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">❤️</button>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">iPhone 15 Plus</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        <span class="text-sm text-gray-500 ml-2">(98 đánh giá)</span>
                    </div>
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <span class="text-xl font-bold text-red-600">24.990.000₫</span>
                        </div>
                    </div>
                    <button onclick="addToCart('iPhone 15 Plus', 24990000)" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        🛒 Thêm vào giỏ
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-12 bg-gray-100">
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