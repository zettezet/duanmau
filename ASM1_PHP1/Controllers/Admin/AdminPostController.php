<?php

class AdminPostController
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
        $posts = (new Post)->all();

        include_once "Views/admin/posts/list.php";

    }
    //Hiển thị form thêm mới
    public function create()
    {
        //lấy ra danh mục
        $lists = (new Listmodels)->all();

        include_once "Views/admin/posts/add.php";
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
        (new Post)->create($data);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }

    public function delete()
    {
        //lấy id sản phẩm muốn xóa
        $id = $_GET['id'];
        //Xóa sản phẩm
        (new Post)->delete($id);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }

    //Giao diện trang edit
    public function edit()
    {
        //Lấy id sản phẩm 
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $posts = (new Post)->find($id);
        //Lấy categories
        $lists = (new Listmodels)->all();
        include_once "Views/admin/posts/edit.php";
    }
    //cập nhật sản phẩm
    public function update()
    {
        //Lấy id sản phẩm 
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $posts = (new Post)->find($id);
        //lấy dữ liệu do người dụng nhập vào
        $data = $_POST;
        //Lấy ảnh cũ khi không cập nhật ảnh mới
        $data['image'] = $posts['image'];
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
        (new Post)->update($id, $data);
        header("location:" . BASE_URL . '?c=admin-product');
        die;
    }
}
