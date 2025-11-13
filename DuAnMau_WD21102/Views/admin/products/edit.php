<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm - <?= $product['name'] ?? 'Sản phẩm' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body {
            background: radial-gradient(circle at top left, #0f2027, #203a43, #2c5364);
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        h2,
        h1 {
            color: #00e0ff;
            text-shadow: 0 0 10px #00e0ff;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: #fff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        }

        .form-control,
        .form-select {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px #00e0ff;
        }

        label {
            color: #b0e0ff;
            font-weight: 600;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #00e0ff);
            border: none;
            box-shadow: 0 0 15px #00e0ff;
            transition: 0.3s;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px #00e0ff;
        }

        .btn-secondary {
            background-color: #444;
            color: #ddd;
            border: none;
        }

        footer {
            color: #aaa;
            font-size: 0.9rem;
        }

        .img-preview {
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .img-preview:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px #00e0ff;
        }

        hr {
            border-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <header class="text-center mb-5">
            <h2>⚡ Chỉnh sửa sản phẩm</h2>
            <p class="text-muted">Bảng điều khiển quản trị hiện đại</p>
            <hr class="border-light">
        </header>

        <div class="card rounded-4 p-4 mx-auto" style="max-width: 800px;">
            <form action="<?= BASE_URL . '?c=admin-product-update&id=' . $product['id'] ?>" method="post" enctype="multipart/form-data">

                <!-- Tên sản phẩm -->
                <div class="mb-3">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name"
                        value="<?= $product['name'] ?>" required>
                </div>

                <!-- Hình ảnh -->
                <div class="mb-4 text-center">
                    <label class="d-block mb-2">Ảnh hiện tại</label>
                    <?php if (!empty($product['image'])): ?>
                        <img src="<?= BASE_URL . $product['image'] ?>" width="200" height="130" class="img-preview mb-3">
                    <?php else: ?>
                        <p class="text-muted">Chưa có ảnh</p>
                    <?php endif; ?>
                    <input type="file" class="form-control mt-2" name="image" accept="image/*">
                </div>

                <!-- Danh mục -->
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <?php foreach ($categories as $list): ?>
                        <option value="<?= $list['id'] ?>" <?= ($list['id'] == $product['brand_id']) ? 'selected' : '' ?>>
                            <?= $list['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>


                <!-- Tiêu đề nhỏ -->
                <div class="mb-3">
                    <label>Giá sản phẩm</label>
                    <input type="number" class="form-control" name="price"
                        value="<?= $product['price'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>chipset</label>
                    <input type="text" class="form-control" name="chipset"
                        value="<?= $product['chipset'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Mô tả sản phẩm</label>
                    <input type="text" class="form-control" name="description"
                        value="<?= $product['description'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Màn hình sản phẩm</label>
                    <input type="text" class="form-control" name="screen"
                        value="<?= $product['screen'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Camera sản phẩm</label>
                    <input type="text" class="form-control" name="camera"
                        value="<?= $product['camera'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>RAM</label>
                    <input type="number" class="form-control" name="ram"
                        value="<?= $product['ram'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Dung lượng</label>
                    <input type="number" class="form-control" name="capacity"
                        value="<?= $product['capacity'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Dung lượng pin</label>
                    <input type="number" class="form-control" name="battery"
                        value="<?= $product['battery'] ?>" required>
                </div>
                <!-- Nút lưu -->
                <div class="d-flex justify-content-between">
                    <a href="<?= BASE_URL . '?c=admin-product' ?>" class="btn btn-secondary px-4">⬅ Quay lại</a>
                    <button type="submit" class="btn btn-primary px-4">💾 Lưu thay đổi</button>
                </div>
            </form>
        </div>

        <footer class="mt-5 text-center">
            <p>© <?= date('Y') ?> - <span style="color:#00e0ff;">ZetteZet Admin Portal</span></p>
        </footer>
    </div>
</body>

</html>