<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thêm tin tức | ZetteZet Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

  <style>
    body {
      background: linear-gradient(135deg, #0f0f10 0%, #1a1a1d 50%, #2a2a30 100%);
      font-family: "Poppins", sans-serif;
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 0;
    }

    .card {
      background: rgba(20, 20, 25, 0.95);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 30px 40px;
      box-shadow: 0 0 25px rgba(255, 0, 255, 0.25);
      max-width: 600px;
      width: 100%;
      backdrop-filter: blur(10px);
      animation: fadeIn 1s ease;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      background: linear-gradient(90deg, #ff00ff, #ff9900);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 30px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    label {
      font-weight: 600;
      color: #ffb347;
    }

    .form-control,
    .form-select {
      background: #1c1c22;
      border: 1px solid #3d3d45;
      color: #fff;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #ff00ff;
      box-shadow: 0 0 10px #ff00ff50;
    }

    .btn {
      border: none;
      border-radius: 12px;
      font-weight: 600;
      transition: 0.3s ease;
      padding: 10px 25px;
    }

    .btn-primary {
      background: linear-gradient(45deg, #ff00ff, #ff9900);
      color: #fff;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 15px #ff00ff80;
    }

    .btn-secondary {
      background: #333;
      color: #ccc;
    }

    .btn-secondary:hover {
      background: #444;
      box-shadow: 0 0 10px #888;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      color: #aaa;
      font-size: 0.9rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="card">
    <header>
      <h2>📰 Thêm tin tức mới</h2>
    </header>

    <form action="<?= BASE_URL . '?c=admin-product-store-1' ?>" method="post" enctype="multipart/form-data">
      <!-- Danh mục -->
      <div class="mb-3">
        <label class="form-label">Danh mục (List)</label>
        <input type="text" class="form-control" name="title" >
        </select>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <a href="<?= BASE_URL . '?c=admin-product-1' ?>" class="btn btn-secondary">⬅ Quay lại</a>
        <button type="submit" class="btn btn-primary">💾 Lưu tin tức</button>
      </div>
    </form>

    <footer class="mt-4">
      <p>© <?= date('Y') ?> - ZetteZet News Control Panel</p>
    </footer>
  </div>
</body>

</html>
