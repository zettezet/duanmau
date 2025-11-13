<?php

class UserController
{
    public function index_2()
    {
        $products = (new Category)->all();

        include_once "Views/admin/categories/list.php";
    }

    public function create_2()
    {
        $categories = (new Category)->all();
        include_once "Views/admin/categories/add.php";
    }

    public function store_2()
    {
        $data = $_POST;
        (new Category)->create($data);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }

    public function delete_2()
    {
        $id = $_GET['id'];
        (new Category)->delete($id);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }

    public function edit_2()
    {
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        // $categories = (new Category)->all();
        include_once "Views/admin/categories/edit.php";
    }
    public function update_2()
    {
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        $data = $_POST;
        (new Category)->update($id, $data);
        header("location:" . BASE_URL . '?c=admin-product-1');
        die;
    }
}
