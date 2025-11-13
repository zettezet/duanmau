<?php
// Kết nối database
$conn = new mysqli("localhost", "root", "", "tuehd_ph60473");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn JOIN
$sql = "
    SELECT 
        posts.id,
        posts.title,
        posts.content,
        posts.image,
        categories.name AS category_name,
        posts.user_id,
        posts.created_at
    FROM posts
    JOIN categories ON posts.category_id = categories.id
";

$result = $conn->query($sql);

// Hiển thị dữ liệu
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " | Tiêu đề: " . $row["title"]. 
             " | Danh mục: " . $row["category_name"]. "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

$conn->close();
?>
