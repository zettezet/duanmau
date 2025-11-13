<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý Users</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background: #0f0f10;
      color: #fff;
      font-family: "Poppins", sans-serif;
    }
    table {
      background: #1c1c22;
      color: #fff;
    }
    th {
      background: #2a2a30;
      color: #ff66cc;
    }
    .btn {
      border-radius: 10px;
      font-weight: 600;
    }
    .container {
      margin-top: 40px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center mb-4" style="color:#ff66cc;">QUẢN LÝ USERS</h2>
  <div class="d-flex justify-content-between mb-3">
    <a href="<?= BASE_URL . '?c=admin-dashboard' ?>" class="btn btn-secondary">⬅ Quay lại</a>
    <a href="<?= BASE_URL . '?c=admin-product-add-2' ?>" class="btn btn-success">+ Thêm user</a>
  </div>

  <table class="table table-bordered table-hover align-middle text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Role</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $u): ?>
      <tr>
        <td><?= $u['id'] ?></td>
        <td><?= $u['username'] ?></td>
        <td><?= $u['password'] ?></td>
        <td><?= $u['email'] ?></td>
        <td><?= $u['role'] == 1 ? 'Admin' : 'User' ?></td>
        <td>
          <a href="<?= BASE_URL . '?c=admin-product-edit-2&id=' . $u['id'] ?>" class="btn btn-primary btn-sm">Sửa</a>
          <a href="<?= BASE_URL . '?c=admin-product-delete-2&id=' . $u['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xóa người dùng này?')">Xóa</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
