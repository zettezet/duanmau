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
}
