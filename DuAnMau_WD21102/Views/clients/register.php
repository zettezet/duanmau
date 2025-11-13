<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

  <style>
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0f0f10 0%, #1a1a1d 50%, #2a2a30 100%);
      color: #fff;
      font-family: "Poppins", sans-serif;
      overflow: hidden;
    }

    .register-card {
      background: rgba(20, 20, 25, 0.9);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 40px 50px;
      width: 400px;
      box-shadow: 0 0 30px rgba(255, 153, 0, 0.3);
      animation: fadeIn 1s ease-in-out;
    }

    .register-card h1 {
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
      letter-spacing: 2px;
      background: linear-gradient(90deg, #ff00ff, #ff9900);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .form-control {
      background: #1c1c22;
      border: 1px solid #3d3d45;
      color: #fff;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #ff9900;
      box-shadow: 0 0 10px #ff990050;
    }

    .btn-primary {
      background: linear-gradient(45deg, #ff00ff, #ff9900);
      border: none;
      font-weight: 600;
      width: 48%;
      border-radius: 12px;
      transition: transform 0.2s, box-shadow 0.3s;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px #ff00ff80;
    }

    /* New: nicer actions layout */
    .form-actions {
      display: flex;
      gap: 16px;
      /* tăng khoảng cách giữa các nút */
      justify-content: space-between;
      /* trải đều các nút trong hàng */
      align-items: center;
      margin-top: 1.25rem;
      flex-wrap: wrap;
      width: 100%;
      /* đảm bảo spread hoạt động */
    }

    .form-actions {
      display: flex;
      gap: 16px;
      /* tạo khoảng cách giữa các nút */
      justify-content: space-between;
      align-items: center;
      margin-top: 1.25rem;
      flex-wrap: wrap;
    }

    .form-actions .btn {
      flex: 1 1 130px;
      min-width: 120px;
      text-align: center;
    }

    .form-actions .btn {
      flex: 1 1 130px;
      /* mỗi nút có thể co dãn nhưng không quá nhỏ */
      min-width: 120px;
      max-width: 200px;
      padding: 10px 14px;
      border-radius: 12px;
    }

    /* Keep btn-primary usable inside .form-actions */
    .form-actions .btn-primary {
      width: auto;
    }

    .btn-outline {
      background: transparent;
      border: 1px solid rgba(255, 255, 255, 0.12);
      color: #fff;
      font-weight: 600;
    }

    .btn-outline:hover {
      background: rgba(255, 255, 255, 0.03);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
      transform: translateY(-2px);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="register-card">
    <h1>✨ Register</h1>

    <form action="<?= BASE_URL . '?c=register' ?>" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Choose your username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Create a strong password">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="interger" name="phone" id="phone" class="form-control" placeholder="Enter your phone">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
      </div>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="?c=login" class="btn btn-outline">Login</a>
        <a href="<?= BASE_URL . '?c=' ?>" class="btn btn-outline">⬅ Quay lại</a>
      </div>

    </form>
  </div>
</body>

</html>