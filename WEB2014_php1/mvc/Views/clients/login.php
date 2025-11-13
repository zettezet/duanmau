<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-50">
        <h1>Login</h1>
        <?php if (isset($message)): ?>
            <div class="alert alert-danger text-danger"><?= $message ?></div>
        <?php endif ?>
        <form action="<?= BASE_URL . '?c=login' ?>" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control">
                <span class="text-danger"><?= $error['email'] ?? '' ?></span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control">
                <span class="text-danger"><?= $error['password'] ?? '' ?></span>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="?c=register" class="btn btn-primary">Register</a>
            </div>
        </form>
    </div>
</body>

</html>