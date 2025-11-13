<?php

class User extends DB
{
    protected $table = "users";

    public function findEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (username, password, email, role)
                VALUES (:username, :password, :email, :role)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function all()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

        public function create_2($data)
        {
            $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO $this->table (username, password, email, role)
                    VALUES (:username, :password, :email, :role)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':username' => $data['username'], ':password' => $hashedPassword, ':email' => $data['email'], ':role' => isset($data['role']) ? $data['role'] : 0
            ]);
        }

    public function update($id, $data)
    {
        $sql = "UPDATE $this->table 
                SET username = :username, email = :email, role = :role 
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':username' => $data['username'],':email' => $data['email'],':role' => $data['role'], ':id' => $id ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
