<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa bài viết - <?= $posts['big_title'] ?? 'Tin tức' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body {
            background: radial-gradient(circle at top left, #0f2027, #203a43, #2c5364);
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        h2, h1 {
            color: #00e0ff;
            text-shadow: 0 0 10px #00e0ff;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }

        .form-control, .form-select {
            background-color: rgba(255,255,255,0.1);
            border: none;
            color: #fff;
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(255,255,255,0.2);
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
            border-color: rgba(255,255,255,0.2);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <header class="text-center mb-5">
            <h2>⚡ Chỉnh sửa bài viết</h2>
            <p class="text-muted">Bảng điều khiển quản trị hiện đại</p>
            <hr class="border-light">
        </header>

        <div class="card rounded-4 p-4 mx-auto" style="max-width: 800px;">
            <form action="<?= BASE_URL . '?c=admin-product-update&id=' . $posts['id'] ?>" method="post" enctype="multipart/form-data">
                
                <!-- Tiêu đề lớn -->
                <div class="mb-3">
                    <label>Tiêu đề lớn (Big Title)</label>
                    <input type="text" class="form-control" name="big_title" 
                           value="<?= $posts['big_title'] ?>" required>
                </div>

                <!-- Tiêu đề nhỏ -->
                <div class="mb-3">
                    <label>Tiêu đề nhỏ (Small Title)</label>
                    <input type="text" class="form-control" name="small_title" 
                           value="<?= $posts['small_title'] ?>" required>
                </div>

                <!-- Hình ảnh -->
                <div class="mb-4 text-center">
                    <label class="d-block mb-2">Ảnh hiện tại</label>
                    <?php if (!empty($posts['image'])): ?>
                        <img src="<?= BASE_URL . $posts['image'] ?>" 
                             width="200" height="130" class="img-preview mb-3">
                    <?php else: ?>
                        <p class="text-muted">Chưa có ảnh</p>
                    <?php endif; ?>
                    <input type="file" class="form-control mt-2" name="image" accept="image/*">
                </div>

                <!-- Danh mục -->
                <div class="mb-4">
                    <label>Danh mục</label>
                    <select name="list_id" class="form-select" required>
                        <?php foreach ($lists as $list): ?>
                            <option value="<?= $list['id'] ?>" 
                                <?= ($list['id'] == $posts['list_id']) ? 'selected' : '' ?>>
                                <?= $list['title'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Nút -->
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
