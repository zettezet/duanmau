<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<div class="container mt-5">
  <h2 class="text-center mb-4 text-warning">➕ Thêm user mới</h2>
  <form action="<?= BASE_URL . '?c=admin-product-store-2' ?>" method="post" class="bg-secondary p-4 rounded">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Vai trò (Role)</label>
      <select name="role" class="form-select">
        <option value="0">User</option>
        <option value="1">Admin</option>
      </select>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= BASE_URL . '?c=admin-product-2' ?>" class="btn btn-light">⬅ Quay lại</a>
      <button type="submit" class="btn btn-warning">💾 Lưu</button>
    </div>
  </form>
</div>
</body>
</html>
