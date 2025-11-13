<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục - <?= htmlspecialchars($posts['title'] ?? 'Không có dữ liệu') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        body {
            background: radial-gradient(circle at top left, #0f2027, #203a43, #2c5364);
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        h2 { color: #00e0ff; text-shadow: 0 0 10px #00e0ff; }
        .card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }
        .form-control {
            background-color: rgba(255,255,255,0.1);
            border: none;
            color: #fff;
        }
        .form-control:focus {
            background-color: rgba(255,255,255,0.2);
            box-shadow: 0 0 10px #00e0ff;
        }
        label { color: #b0e0ff; font-weight: 600; }
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
        .btn-secondary { background-color: #444; color: #ddd; border: none; }
        hr { border-color: rgba(255,255,255,0.2); }
    </style>
</head>

<body>
<div class="container py-5">
    <header class="text-center mb-5">
        <h2>⚡ Chỉnh sửa danh mục</h2>
        <p class="text-muted">Bảng điều khiển quản trị</p>
        <hr class="border-light">
    </header>

    <div class="card rounded-4 p-4 mx-auto" style="max-width: 600px;">
        <form action="<?= BASE_URL . '?c=admin-product-update-1&id=' . $posts['id'] ?>" method="post">
            <div class="mb-4">
                <label class="form-label">Tên danh mục</label>
                <input 
                    type="text" 
                    name="title" 
                    class="form-control"
                    value="<?= htmlspecialchars($posts['title'] ?? '') ?>" 
                    required
                >
            </div>

            <div class="d-flex justify-content-between">
                <a href="<?= BASE_URL . '?c=admin-product-1' ?>" class="btn btn-secondary px-4">⬅ Quay lại</a>
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
