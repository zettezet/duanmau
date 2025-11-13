<?php

class DB {
    protected $conn;

    public function __construct() {
        // Thông tin truy cập vào database
        $host = "localhost"; // 127.0.0.1
        $dbname = "tuehd_ph60473";
        $username = "root";
        $password = "";
        $port = "3306";

        try {
            // Kết nối đến cơ sở dữ liệu 
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8", $username, $password);
            // echo "Kết nối dữ liệu thành công";
        } catch (PDOException $e) {
            echo "Lỗi kết nối database: " . $e->getMessage();
        }
    }
}
