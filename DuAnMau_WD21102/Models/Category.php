<?php

class Category extends DB
{
    public function all()
    {
        $sql = "SELECT * FROM categories";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }
    public function find($id)
    {
        $sql = "SELECT * FROM categories WHERE id='$id'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function create($data)
    {
        $sql = "INSERT INTO categories(name) VALUES(:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
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
