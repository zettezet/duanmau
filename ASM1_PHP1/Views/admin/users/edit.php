<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Sửa User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<div class="container mt-5">
  <h2 class="text-center mb-4 text-info">✏️ Sửa thông tin user</h2>
  <form action="<?= BASE_URL . '?c=admin-product-update-2&id=' . $users['id'] ?>" method="post" class="bg-secondary p-4 rounded">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" name="username" value="<?= htmlspecialchars($users['username']) ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($users['email']) ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Role</label>
      <select name="role" class="form-select">
        <option value="0" <?= $users['role'] == 0 ? 'selected' : '' ?>>User</option>
        <option value="1" <?= $users['role'] == 1 ? 'selected' : '' ?>>Admin</option>
      </select>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= BASE_URL . '?c=admin-product-2' ?>" class="btn btn-light">⬅ Quay lại</a>
      <button type="submit" class="btn btn-info">💾 Cập nhật</button>
    </div>
  </form>
</div>
</body>
</html>
