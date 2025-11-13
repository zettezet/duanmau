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
        $sql = "INSERT INTO users(name, password, email, phone, address, role) VALUES(:name, :password, :email, :phone, :address, :role)";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute($data);
    }
    public function find($id)
    {
        $sql = "SELECT * FROM users WHERE id='$id'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $data)
    {
        $sql = "UPDATE categories SET name=:name WHERE id=:id";
        $data['id'] = $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':name' => $data['name'],
            ':id' => $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
