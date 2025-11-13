<?php

class DB
{
    protected $conn;
    public function __construct()
    {
        //Thông tin truy cập vào database
        $host = "localhost"; //127.0.0.1
        $dbname = "wd21101";
        $username = "root";
        $password = "";
        $port = "3306";

        try {
            //Kết nối đến database
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8; port=$port", $username, $password);
            // echo "Kết nối dữ liệu thành công";
        } catch (PDOException $e) {
            echo "Lỗi kết nối database: " . $e->getMessage();
        }
    }
}
