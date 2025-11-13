<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm phim mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #1e293b, #0f172a); color: #fff; }
        .form-container { max-width: 700px; margin: 50px auto; background: #1e293b; padding: 30px; border-radius: 20px; box-shadow: 0 0 25px rgba(0,0,0,0.4); }
        input, textarea, select { border-radius: 10px !important; }
        .btn-glow { background: #22c55e; color: white; border-radius: 50px; transition: 0.3s; }
        .btn-glow:hover { background: #16a34a; transform: scale(1.05); }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center mb-4">🎥 Thêm phim mới</h2>
    <form action="index.php?c=store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên phim</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Poster (chọn file ảnh)</label>
        <input type="file" name="poster" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
        <label class="form-label">Giới thiệu</label>
        <textarea name="intro" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Ngày phát hành</label>
        <input type="date" name="release_date" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Thể loại</label>
        <select name="genre_id" class="form-select">
            <?php foreach ($genres as $genre): ?>
                <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-glow px-5">💾 Lưu</button>
        <a href="index.php?c=index" class="btn btn-secondary px-4">← Quay lại</a>
    </div>
</form>

</div>

</body>
</html>
