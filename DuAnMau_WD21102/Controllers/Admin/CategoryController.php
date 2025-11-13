<?php

class CategoryController
{
    public function index_1()
    {
        $products = (new Category)->all();

        include_once "Views/admin/categories/list.php";
    }

    public function create_1()
    {
        $categories = (new Category)->all();
        include_once "Views/admin/categories/add.php";
    }

    public function store_1()
    {
        $data = $_POST;
        (new Category)->create($data);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }

    public function delete_1()
    {
        $id = $_GET['id'];
        (new Category)->delete($id);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }

    public function edit_1()
    {
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        // $categories = (new Category)->all();
        include_once "Views/admin/categories/edit.php";
    }
    public function update_1()
    {
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        $data = $_POST;
        (new Category)->update($id, $data);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }
}
