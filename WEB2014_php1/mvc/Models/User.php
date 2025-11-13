<?php

class User extends DB
{
    public function findEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email=:email";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute(
            ['email' => $email]
        );
        //Lấy dữ liệu
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    public function create($data)
    {
        //Câu lệnh sql có chưa tham số
        $sql = "INSERT INTO users(username, password, email, role) VALUES(:username, :password, :email, :role)";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute($data);
    }
}
