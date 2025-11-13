<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa phim - <?= $movie['title'] ?? '' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body style="background: #0f172a; color: #e2e8f0;">
    <div class="container py-5">
        <h2 class="mb-4 text-center">🎬 Sửa thông tin phim</h2>

        <form action="<?= BASE_URL . '?c=update&id=' . $movie['id'] ?>" method="post" enctype="multipart/form-data" class="card p-4 bg-dark text-light">
            <div class="mb-3">
                <label class="form-label">Tên phim</label>
                <input type="text" class="form-control" name="title" value="<?= $movie['title'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Poster</label><br>
                <input type="file" class="form-control" name="poster">
            </div>

            <div class="mb-3">
                <label class="form-label">Thể loại</label>
                <select name="genre_id" class="form-select">
                    <?php foreach ($genres as $genre): ?>
                        <option value="<?= $genre['id'] ?>"
                            <?= ($genre['id'] == $movie['genre_id']) ? 'selected' : '' ?>>
                            <?= $genre['name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Ngày phát hành</label>
                <input type="date" name="release_date" class="form-control" value="<?= $movie['release_date'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Giới thiệu</label>
                <textarea name="intro" class="form-control" rows="5"><?= $movie['intro'] ?></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">💾 Cập nhật</button>
                <a href="<?= BASE_URL . '?c=index' ?>" class="btn btn-secondary">← Quay lại danh sách</a>
            </div>
        </form>
    </div>
</body>
</html>
