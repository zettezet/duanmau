<?php
require_once __DIR__ . '/DB.php';
class Movie extends DB{
    public function all() {
    $sql = "SELECT m.*, g.name AS genre_name
            FROM movies m
            LEFT JOIN genres g ON m.genre_id = g.id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function productInGenres($genre_id)
    {
        $sql = "SELECT * FROM movies WHERE genre_id=$genre_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function find($id)
    {
        $sql = "SELECT * FROM movies WHERE id= ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create($data)
    {
        $sql = "INSERT INTO movies(title, poster, intro, release_date, genre_id) VALUES(:title, :poster, :intro, :release_date, :genre_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
    }
    public function update($id, $data)
    {
        $sql = "UPDATE movies SET title=:title, poster=:poster, intro=:intro, release_date=:release_date, genre_id=:genre_id WHERE id=:id";
        $data['id'] = $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM movies WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}