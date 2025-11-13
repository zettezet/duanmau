<?php
class Listmodels extends DB
{
    public function all()
    {
        $sql = "SELECT * FROM lists";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM lists WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO lists (title) VALUES (:title)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':title' => $data['title']
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE lists SET title = :title WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':title' => $data['title']
        ]);
    }

    public function delete_1($id)
    {
        $sql = "DELETE FROM lists WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
