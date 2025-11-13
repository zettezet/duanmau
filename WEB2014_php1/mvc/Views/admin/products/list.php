<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website: <?= $title ?? '' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <header>Menu

            <strong>
                <?= $_SESSION['user']['username'] ?>
            </strong>
            <a href="<?= BASE_URL . '?c=logout' ?>" class="btn btn-primary">Logout</a>
        </header>
        <h1>Danh sách sản phẩm</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">
                        <a href="<?= BASE_URL . '?c=admin-product-add' ?>" class="btn btn-primary">Create</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $pro): ?>
                    <tr>
                        <th scope="row"><?= $pro['id'] ?></th>
                        <td><?= $pro['name'] ?></td>
                        <td>
                            <img src="<?= BASE_URL . $pro['image'] ?>" width="99" alt="">
                        </td>
                        <td><?= $pro['price'] ?></td>
                        <td><?= $pro['quantity'] ?></td>
                        <td>
                            <a href="<?= BASE_URL . '?c=admin-product-edit&id=' . $pro['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL . '?c=admin-product-delete&id=' . $pro['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <footer>Footer</footer>
    </div>
</body>

</html>