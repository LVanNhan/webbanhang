<?php
class CategoryModel
{
    private $conn;
    private $table_name = "category";

    // Kết nối database
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Lấy tất cả danh mục
    public function getCategories()
    {
        $query = "SELECT id, name, description 
                  FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Lấy danh mục theo ID
    public function getCategoryById($id)
    {
        $query = "SELECT * 
                  FROM " . $this->table_name . " 
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Thêm danh mục
    public function addCategory($name, $description)
    {
        $errors = [];

        // Validate
        if (empty($name)) {
            $errors['name'] = 'Tên danh mục không được để trống';
        }

        if (empty($description)) {
            $errors['description'] = 'Mô tả danh mục không được để trống';
        }

        // Nếu có lỗi
        if (count($errors) > 0) {
            return $errors;
        }

        $query = "INSERT INTO " . $this->table_name . "
                    (name, description)
                  VALUES
                    (:name, :description)";

        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description));

        // Bind dữ liệu
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);

        // Execute
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Cập nhật danh mục
    public function updateCategory($id, $name, $description)
    {
        $errors = [];

        // Validate
        if (empty($name)) {
            $errors['name'] = 'Tên danh mục không được để trống';
        }

        if (empty($description)) {
            $errors['description'] = 'Mô tả danh mục không được để trống';
        }

        // Nếu có lỗi
        if (count($errors) > 0) {
            return $errors;
        }

        $query = "UPDATE " . $this->table_name . "
                  SET 
                    name = :name,
                    description = :description
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $id = htmlspecialchars(strip_tags($id));
        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description));

        // Bind dữ liệu
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);

        // Execute
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Xóa danh mục
    public function deleteCategory($id)
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