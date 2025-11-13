<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #0f172a; color: #e2e8f0; }
        .card { background: #1e293b; border: none; }
        .btn-custom { border-radius: 50px; transition: 0.3s; }
        .btn-custom:hover { transform: scale(1.05); }
        table img { border-radius: 8px; }
    </style>
</head>
<body class="p-4">

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-light">🎬 Danh sách phim</h2>
        <a href="index.php?c=create" class="btn btn-success btn-custom">+ Thêm phim mới</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Poster</th>
                        <th>Tên phim</th>
                        <th>Thể loại</th>
                        <th>Ngày phát hành</th>
                        <th>Giới thiệu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td><?= $movie['id'] ?></td>
                            <td><img src="<?= $movie['poster'] ?>" width="99"></td>
                            <td><?= $movie['title'] ?></td>
                            <td><?= $movie['genre_name'] ?></td>
                            <td><?= $movie['release_date'] ?></td>
                            <td><?= $movie['intro'] ?></td>
                            <td>
                            <a href="<?= BASE_URL ?>?c=edit&id=<?= $movie['id'] ?>" class="btn btn-primary">Sửa</a>
                            <a href="index.php?c=delete&id=<?= $movie['id'] ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc muốn xóa phim không?');">
                                Xóa
                                </a>
                            </td>
                         </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
