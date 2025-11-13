<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-50">
        <h1>Register</h1>
        <form action="<?= BASE_URL . '?c=register' ?>" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="?c=login" class="btn btn-primary">Login</a>
            </div>
        </form>
    </div>
</body>

</html>