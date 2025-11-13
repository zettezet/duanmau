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
        <header>Menu</header>
        <h1>Thêm sản phẩm</h1>
        <form action="<?= BASE_URL . '?c=admin-product-store' ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <select name="category_id" class="form-control" id="">
                    <?php foreach ($categories as $cate): ?>
                        <option value="<?= $cate['id'] ?>">
                            <?= $cate['name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" class="form-control" row=5 id=""></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Content</label>
                <textarea name="content" class="form-control" row=10 id=""></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="<?= BASE_URL . '?c=admin-product' ?>" class="btn btn-primary">Product List</a>
            </div>
        </form>
        <footer>Footer</footer>
    </div>
</body>

</html>