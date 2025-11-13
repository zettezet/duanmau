<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

    .login-card {
      background: rgba(20, 20, 25, 0.9);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 40px 50px;
      width: 400px;
      box-shadow: 0 0 30px rgba(100, 0, 255, 0.4);
      animation: fadeIn 1s ease-in-out;
    }

    .login-card h1 {
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
      border-color: #ff00ff;
      box-shadow: 0 0 10px #ff00ff50;
    }

    .forgot-password {
      text-align: right;
      font-size: 0.9rem;
      margin-top: -5px;
      margin-bottom: 15px;
    }

    .forgot-password a {
      color: #ff9900;
      text-decoration: none;
      transition: color 0.3s;
    }

    .forgot-password a:hover {
      color: #ff00ff;
      text-decoration: underline;
    }

    .btn-primary {
      background: linear-gradient(45deg, #ff00ff, #ff9900);
      border: none;
      font-weight: 600;
      width: 48%;
      border-radius: 12px;
      transition: transform 0.2s, box-shadow 0.3s;
      gap: 10px;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px #ff00ff80;
    }

    .login-actions {
      display: flex;
      gap: 12px;
      justify-content: center;
      align-items: center;
      margin-top: 1.25rem;
      flex-wrap: wrap;
    }

    .login-actions .btn {
      min-width: 120px;
      flex: 1 1 auto;
      max-width: 160px;
      padding: 10px 14px;
      border-radius: 12px;
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

    .alert {
      background: rgba(255, 0, 0, 0.1);
      border: 1px solid #ff0040;
      color: #ff8080;
      text-align: center;
      border-radius: 10px;
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
  <div class="login-card">
    <h1>⚡ Login</h1>

    <?php if (isset($message)): ?>
      <div class="alert"><?= $message ?></div>
    <?php endif ?>

    <form action="<?= BASE_URL . '?c=login' ?>" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
        <span class="text-danger"><?= $error['email'] ?? '' ?></span>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        <span class="text-danger"><?= $error['password'] ?? '' ?></span>
      </div>

      <!-- ✅ Thêm dòng "Quên mật khẩu?" -->
      <div class="forgot-password">
        <a href="<?= BASE_URL . '?c=forgot_password' ?>">Quên mật khẩu?</a>
      </div>

      <div class="login-actions">
        <button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
        <a href="?c=register" class="btn btn-outline" id="signupBtn">Register</a>
        <a href="<?= BASE_URL . '?c=' ?>" class="btn btn-outline">⬅ Quay lại</a>
      </div>
    </form>
  </div>
</body>

</html>