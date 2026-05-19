<?php
class ProductModel
{
    private $conn;
    private $table_name = "product";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Lấy danh sách sản phẩm quần áo
    public function getProducts()
    {
        $query = "SELECT 
                    p.id,
                    p.name,
                    p.description,
                    p.price,
                    p.image,
                    c.name AS category_name
                FROM " . $this->table_name . " p
                LEFT JOIN category c 
                ON p.category_id = c.id";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Lấy sản phẩm theo ID
    public function getProductById($id)
    {
        $query = "SELECT * 
                  FROM " . $this->table_name . " 
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Thêm sản phẩm quần áo
    public function addProduct($name, $description, $price, $image, $category_id)
    {
        $errors = [];

        // Validate dữ liệu
        if (empty($name)) {
            $errors['name'] = 'Tên sản phẩm không được để trống';
        }

        if (empty($description)) {
            $errors['description'] = 'Mô tả sản phẩm không được để trống';
        }

        if (empty($price) || !is_numeric($price) || $price <= 0) {
            $errors['price'] = 'Giá sản phẩm không hợp lệ';
        }

        if (empty($category_id)) {
            $errors['category'] = 'Vui lòng chọn danh mục';
        }

        // Nếu có lỗi thì trả về
        if (count($errors) > 0) {
            return $errors;
        }

        $query = "INSERT INTO " . $this->table_name . "
                    (name, description, price, image, category_id)
                  VALUES
                    (:name, :description, :price, :image, :category_id)";

        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description));
        $price = htmlspecialchars(strip_tags($price));
        $image = strip_tags($image);
        $category_id = htmlspecialchars(strip_tags($category_id));

        // Bind dữ liệu
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':category_id', $category_id);

        // Execute
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Cập nhật sản phẩm
    public function updateProduct($id, $name, $description, $price, $image, $category_id)
    {
        $query = "UPDATE " . $this->table_name . "
                  SET 
                    name = :name,
                    description = :description,
                    price = :price,
                    image = :image,
                    category_id = :category_id
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description));
        $price = htmlspecialchars(strip_tags($price));
        $image = strip_tags($image);
        $category_id = htmlspecialchars(strip_tags($category_id));

        // Bind dữ liệu
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':category_id', $category_id);

        // Execute
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Xóa sản phẩm
    public function deleteProduct($id)
    {
        $query = "DELETE FROM " . $this->table_name . "
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>