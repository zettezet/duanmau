<?php
//Lớp Product dùng để truy cập và xử lý dữ liệu của bảng products
class Product extends DB
{
    //Lấy ra toàn bộ sản phẩm
    public function all()
    {
        $sql = "SELECT * FROM products";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    //Lấy sản phẩm theo danh mục
    public function productInCategory($category_id)
    {
        $sql = "SELECT * FROM products WHERE category_id=$category_id";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả về dữ liệu cho hàm
        return $result;
    }

    //Chi tiêt sản phẩm theo id
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

    /**
     * @create: Phương thức thêm dữ liệu 
     * @$data: mảng dữ liệu cần thêm
     * $data = ['name' => 'iphone 19', 'price'=>1900, ...]
     * mảng có key và value, trong đó key phải là tên cột
     **/
    public function create($data)
    {
        //Câu lệnh sql có chưa tham số
        $sql = "INSERT INTO products(name, price, image, description, content, quantity, category_id) VALUES(:name, :price, :image, :description, :content, :quantity, :category_id)";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute($data);
        //Trả lại id vừa được thêm vào database
        return $this->conn->lastInsertId();
    }

    /**
     * @update: phương thức để cập nhật dữ liệu
     * @$data: mảng dữ liệu cần thêm
     * @$id: là id của dữ liệu cần cập nhật
     */
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name, price=:price, image=:image, description=:description, content=:content, quantity=:quantity, category_id=:category_id WHERE id=:id";

        //Thêm id vào mảng data
        $data['id'] = $id;
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute($data);
    }

    /**
     * @method delete: xoa dữ liệu
     * @param $id: id của dữ liệu cần xóa
     */
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id=:id";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute(['id' => $id]);
    }
}
