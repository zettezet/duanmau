<?php
class DB
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "tktw_wd21102";
        $username = "root";
        $password = "";
        $port = "3306";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi kết nối database: " . $e->getMessage();
        }
    }

    // ✅ Thêm hàm này:
    public function getConnection()
    {
        return $this->conn;
    }
}
