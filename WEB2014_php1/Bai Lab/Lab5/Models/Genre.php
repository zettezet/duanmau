<?php
require_once 'DB.php';

class Genre extends DB{
    public  function all() {
        
        $sql = "SELECT * FROM genres";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
