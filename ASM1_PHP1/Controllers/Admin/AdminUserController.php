<?php
class AdminUserController
{
    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '?c=login');
            exit;
        }
    }

    public function index_2()
    {
        $users = (new User)->all();
        include_once "Views/admin/users/list.php";
    }

    public function create_2()
    {
        include_once "Views/admin/users/add.php";
    }

    public function store_2()
    {
        $data = $_POST;
        (new User)->create_2($data);
        header("Location: " . BASE_URL . '?c=admin-product-2');
        exit;
    }

    public function delete_2()
    {
        $id = $_GET['id'];
        (new User)->delete($id);
        header("Location: " . BASE_URL . '?c=admin-product-2');
        exit;
    }

    public function edit_2()
    {
        $id = $_GET['id'];
        $model = new User();
        $users = $model->find($id);
        include "Views/admin/users/edit.php";
    }

    public function update_2()
    {
        $id = $_GET['id'];
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'role' => $_POST['role']
        ];
        $model = new User();
        $model->update($id, $data);
        header("Location: " . BASE_URL . "?c=admin-product-2");
    }
}
