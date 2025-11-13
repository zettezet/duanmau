<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bài viết</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #0f0f10 0%, #1a1a1d 50%, #2a2a30 100%);
      color: #fff;
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
    }

    .dashboard-container {
      background: rgba(20, 20, 25, 0.9);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 0 30px rgba(255, 0, 255, 0.2);
      margin-top: 60px;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 30px;
      background: linear-gradient(90deg, #ff00ff, #ff9900);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .table {
      border-radius: 10px;
      overflow: hidden;
      color: #fff;
    }

    .table thead {
      background: linear-gradient(45deg, #ff00ff, #ff9900);
      color: #fff;
    }

    .table tbody tr {
      background: #1e1e25;
      transition: background 0.2s ease, transform 0.1s ease;
    }

    .table tbody tr:hover {
      background: #2c2c33;
      transform: scale(1.01);
    }

    .btn-primary, .btn-success, .btn-danger, .btn-secondary {
      border: none;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #6f00ff, #c800ff);
      box-shadow: 0 0 10px #a000ff80;
      transform: translateY(-2px);
    }

    .btn-success:hover {
      background: linear-gradient(45deg, #00ff9d, #00c3ff);
      box-shadow: 0 0 10px #00ffc880;
      transform: translateY(-2px);
    }

    .btn-danger:hover {
      background: linear-gradient(45deg, #ff0040, #ff7a00);
      box-shadow: 0 0 10px #ff3b3b80;
      transform: translateY(-2px);
    }

    .btn-secondary:hover {
      background: #444;
      box-shadow: 0 0 8px #aaa;
    }

    .header-user {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.05);
      padding: 15px 25px;
      border-radius: 15px;
      margin-bottom: 25px;
    }

    .username {
      font-weight: 600;
      font-size: 1.1rem;
      color: #ffb347;
    }

    img {
      border: 2px solid #333;
      transition: 0.3s;
    }

    img:hover {
      transform: scale(1.05);
      border-color: #ff00ff;
      box-shadow: 0 0 10px #ff00ff80;
    }
  </style>
</head>

<body>
  <div class="container dashboard-container">
    <div class="header-user">
      <div class="username">
        👤 <?= $_SESSION['user']['username'] ?>
      </div>
      <a href="<?= BASE_URL ?>" class="btn btn-primary">Logout</a>
    </div>

    <h2>Quản lý bài viết</h2>

    <div class="text-end mb-3">
      <a href="<?= BASE_URL ?>?c=admin-product-add" class="btn btn-success">+ Thêm bài viết</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Hình ảnh</th>
            <th>Tiêu đề lớn</th>
            <th>Tiêu đề nhỏ</th>
            <th>Danh mục</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $post): ?>
            <tr>
              <td><?= $post['id'] ?></td>
              <td>
                <img src="<?= $post['image'] ?>" alt="Ảnh" width="120" height="80" style="object-fit:cover;border-radius:8px;">
              </td>
              <td><?= $post['big_title'] ?></td>
              <td><?= $post['small_title'] ?></td>
              <td><?= $post['list_title'] ?></td>
              <td>
                <a href="<?= BASE_URL ?>?c=admin-product-edit&id=<?= $post['id'] ?>" class="btn btn-sm btn-primary me-1">Sửa</a>
                <a href="<?= BASE_URL ?>?c=admin-product-delete&id=<?= $post['id'] ?>"
                   onclick="return confirm('Bạn có chắc muốn xóa bài viết này không?')"
                   class="btn btn-sm btn-danger">Xóa</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
       <a href="<?= BASE_URL . '?c=admin-dashboard' ?>" class="btn btn-secondary px-4">⬅ Quay lại</a>
      </table>
    </div>
  </div>
</body>
</html>
