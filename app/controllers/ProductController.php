<?php
require_once('app/config/database.php');
require_once('app/models/ProductModel.php');
require_once('app/models/CategoryModel.php');

class ProductController
{
    private $productModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }

    public function index()
    {
        $products = $this->productModel->getProducts();
        include 'app/view/product/list.php';
    }

    public function show($id)
    {
        $product = $this->productModel->getProductById($id);
        include 'app/view/product/show.php';
    }

    public function add()
    {
        $categoryModel = new CategoryModel($this->db);
        $categories = $categoryModel->getCategories();
        include 'app/view/product/add.php';
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name        = $_POST['name'];
            $description = $_POST['description'];
            $price       = $_POST['price'];
            $category_id = $_POST['category_id'];

            // Xử lý upload ảnh
            $image = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'public/uploads/';
                $ext       = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $fileName  = time() . '_' . uniqid() . '.' . $ext;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName)) {
                    $image = $uploadDir . $fileName;
                }
            }

            $result = $this->productModel->addProduct($name, $description, $price, $image, $category_id);

            if (is_array($result)) {
                $errors = $result;
                $categoryModel = new CategoryModel($this->db);
                $categories    = $categoryModel->getCategories();
                include 'app/view/product/add.php';
            } else {
                header('Location: /webbanhang/Product');
            }
        }
    }

    public function edit($id)
    {
        $product = $this->productModel->getProductById($id);
        $categoryModel = new CategoryModel($this->db);
        $categories    = $categoryModel->getCategories();
        include 'app/view/product/edit.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id          = $_POST['id'];
            $name        = $_POST['name'];
            $description = $_POST['description'];
            $price       = $_POST['price'];
            $category_id = $_POST['category_id'];

            // Giữ ảnh cũ nếu không upload ảnh mới
            $image = $_POST['image_current'] ?? '';

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'public/uploads/';
                $ext       = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $fileName  = time() . '_' . uniqid() . '.' . $ext;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName)) {
                    $image = $uploadDir . $fileName;
                }
            }

            $this->productModel->updateProduct($id, $name, $description, $price, $image, $category_id);
            header('Location: /webbanhang/Product');
        }
    }

    public function delete($id)
    {
        $this->productModel->deleteProduct($id);
        header('Location: /webbanhang/Product');
    }
}
?>
