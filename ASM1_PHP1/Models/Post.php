<?php

class Post extends DB {

    public function all() {
        $sql = "SELECT posts.*, lists.title AS list_title FROM posts JOIN lists ON posts.list_id = lists.id ORDER BY posts.id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function productInCategory($list_id) {
        $sql = "SELECT posts.*, lists.title AS list_title FROM posts JOIN lists ON posts.list_id = lists.id WHERE posts.list_id = :list_id ORDER BY posts.id ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['list_id' => $list_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $sql = "SELECT posts.*, lists.title AS list_title FROM posts JOIN lists ON posts.list_id = lists.id WHERE posts.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO posts (big_title, small_title, image, list_id) VALUES (:big_title, :small_title, :image, :list_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE posts SET big_title = :big_title, small_title = :small_title, image = :image, list_id = :list_id WHERE id = :id";
        $data['id'] = $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
