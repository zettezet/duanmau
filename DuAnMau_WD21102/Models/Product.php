    <?php

    class Product extends DB
    {

        public function all()
        {
            $sql = "SELECT products.*, categories.name AS cate_name FROM products JOIN categories ON products.brand_id = categories.id ORDER BY products.id ASC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function find($id)
        {
            $sql = "SELECT * FROM products WHERE id='$id'";
            //Chuẩn bị
            $stmt = $this->conn->prepare($sql);
            //Thực thi
            $stmt->execute();
            //Lấy dữ liệu
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //Trả về dữ liệu cho hàm
            return $result;
        }
        public function getOther($product)
        {
            $sql = "SELECT products.*, categories.name AS cate_name FROM products JOIN categories ON products.brand_id = categories.id
            WHERE products.brand_id = :brand_id
            and products.id != :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':brand_id' => $product['brand_id'],
                ':id' => $product['id'],
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function create($data)
        {
            $sql = "INSERT INTO products(name, brand_id, image, price, chipset, description, screen, camera, ram, capacity, battery) VALUES(:name, :brand_id, :image, :price, :chipset, :description, :screen, :camera, :ram, :capacity, :battery)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            return $this->conn->lastInsertId();
        }

        public function update($id, $data)
        {
            $sql = "UPDATE products SET name=:name, brand_id=:brand_id, image=:image, price=:price, chipset=:chipset, description=:description, screen=:screen, camera=:camera, ram=:ram, capacity=:capacity, battery=:battery WHERE id=:id";
            $data['id'] = $id;
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $data['name'],
                ':brand_id' => $data['brand_id'],
                ':image' => $data['image'],
                ':price' => $data['price'],
                ':chipset' => $data['chipset'],
                ':description' => $data['description'],
                ':screen' => $data['screen'],
                ':camera' => $data['camera'],
                ':ram' => $data['ram'],
                ':capacity' => $data['capacity'],
                ':battery' => $data['battery'],
                ':id' => $id
            ]);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM products WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id' => $id]);
        }
    }
