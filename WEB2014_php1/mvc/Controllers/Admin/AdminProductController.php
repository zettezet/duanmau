<?php

class AdminProductController
{
    public function __construct()
    {
        //Yêu cầu đăng nhập
        //Nếu người dùng chưa đăng nhập thì chuyển hướng về login
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '?c=login');
        }
    }

    //hiển thị danh sách sản phẩm
    public function index()
    {
        $products = (new Product)->all();

        include_once "Views/admin/products/list.php";
    }

    //Hiển thị form thêm mới
    public function create()
    {
        //lấy ra danh mục
        $categories = (new Category)->all();
        include_once "Views/admin/products/add.php";
    }

    //Thêm dữ liệu vào database
    public function store()
    {
        //lấy dữ liệu từ form
        $data = $_POST;

        //Thêm image rống
        $data['image'] = '';

        //Lấy file ảnh
        $file = $_FILES['image'];
        //Kiểm tra xem người dùng có upload file ko
        if ($file['size'] > 0) {
            //Lấy tên file kèm với thư mục chứa ảnh
            $image = 'images/' . $file['name'];
            //Upload ảnh
            move_uploaded_file($file['tmp_name'], $image);
            //gán tên file vào trong mảng $data
            $data['image'] = $image;
        }

        //Thêm vào
        (new Product)->create($data);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }

    public function delete()
    {
        //lấy id sản phẩm muốn xóa
        $id = $_GET['id'];
        //Xóa sản phẩm
        (new Product)->delete($id);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }

    //Giao diện trang edit
    public function edit()
    {
        //Lấy id sản phẩm 
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $product = (new Product)->find($id);
        //Lấy categories
        $categories = (new Category)->all();
        include_once "Views/admin/products/edit.php";
    }
    //cập nhật sản phẩm
    public function update()
    {
        //Lấy id sản phẩm 
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $product = (new Product)->find($id);
        //lấy dữ liệu do người dụng nhập vào
        $data = $_POST;
        //Lấy ảnh cũ khi không cập nhật ảnh mới
        $data['image'] = $product['image'];
        //Lấy file ảnh
        $file = $_FILES['image'];
        //Kiểm tra xem người dùng có upload file ko
        if ($file['size'] > 0) {
            //Lấy tên file kèm với thư mục chứa ảnh
            $image = 'images/' . $file['name'];
            //Upload ảnh
            move_uploaded_file($file['tmp_name'], $image);
            //gán tên file vào trong mảng $data
            $data['image'] = $image;
        }

        //Cập nhật
        (new Product)->update($id, $data);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }
}
