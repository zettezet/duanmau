<?php
class AdminListController
{
    public function __construct()
    {
        // Yêu cầu đăng nhập
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '?c=login');
            exit;
        }
    }

    // 🧩 Hiển thị danh sách lists
    public function index_1()
    {
        $lists = (new Listmodels)->all();
        include_once "Views/admin/lists/list.php";
    }

    // 🧩 Hiển thị form thêm mới
    public function create_1()
    {
        include_once "Views/admin/lists/add.php";
    }

    // 🧩 Lưu dữ liệu thêm mới
    public function store_1()
    {
        $data = $_POST;
        (new Listmodels)->create($data);
        header("Location: " . BASE_URL . '?c=admin-product-1');
        exit;
    }

    // 🧩 Xóa 1 bản ghi
    public function delete_1()
    {
        $id = $_GET['id'];
        (new Listmodels)->delete_1($id);
        header("Location: " . BASE_URL . '?c=admin-product-1');
        exit;
    }

   public function edit_1() {
        $id = $_GET['id'];
        $model = new Listmodels();
        $posts = $model->find($id);
        include "Views/admin/lists/edit.php";
    }

    public function update_1() {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $model = new Listmodels();
        $model->update($id, ['title' => $title]);
        header("Location: " . BASE_URL . "?c=admin-product-1");
    }

}
