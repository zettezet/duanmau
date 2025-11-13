<?php

class AuthController
{
    public function login()
    {
        //Kiểm tra xem người dùng có gửi dữ liệu lên server ko
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //Validate
            //Email trống
            if (trim($email) == '') {
                $error['email'] = "Email không được để trống";
            }
            //Email không hợp lệ
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Email không hợp lệ";
            }
            if ($password == '') {
                $error['password'] = "Mật khẩu không được để trống";
            }

            //Nếu không có lỗi validate
            if (!isset($error)) {
                //kiểm tra email trong database
                $user = (new User)->findEmail($email);
                //Nếu có email tồn tại
                if ($user) {
                    //Kiểm tra mật khẩu đúng
                    if (password_verify($password, $user['password'])) {
                        //Khởi tạo session
                        $_SESSION['user'] = $user;
                        header('Location: ' . BASE_URL . '?c=admin-dashboard');
                    } else { //Nếu mật khẩu sai
                        $message = "Email hoặc password không chính xác";
                    }
                } else {
                    $message = "Email hoặc password không chính xác";
                }
            }
        }

        //Hiển thị form
        include_once "Views/clients/login.php";
    }

    public function register()
    {
        //Nhập dữ liệu đăng ký vào database
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $username = $_POST['username'];
            //Mã hóa mật để không thể nhận biết được mật khi vào CSDL
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            //Thêm vào CSDL
            $user = new User;
            $user->create(
                [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'role' => 0
                ]
            );
            //Chuyển về trang đăng nhập
            header("location: " . BASE_URL . '?c=login');
        }
        //Hiển thị form đăng ký
        include_once "Views/clients/register.php";
    }
    //Đăng xuất
    public function logout()
    {
        unset($_SESSION['user']);
        //Chuyển về trang đăng nhập
        header("location: " . BASE_URL . '?c=login');
    }
}
