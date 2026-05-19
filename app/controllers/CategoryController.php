<?php
require_once('app/config/database.php');
require_once('app/models/CategoryModel.php');

class CategoryController
{
    private $categoryModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();

        $this->categoryModel = new CategoryModel($this->db);
    }

    // Danh sách danh mục
    public function index()
    {
        $categories = $this->categoryModel->getCategories();

        include 'app/view/category/list.php';
    }

    // Form thêm
    public function add()
    {
        include 'app/view/category/add.php';
    }

    // Lưu danh mục
    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $description = $_POST['description'];

            $result = $this->categoryModel->addCategory(
                $name,
                $description
            );

            if (is_array($result)) {
                $errors = $result;

                include 'app/view/category/add.php';
            } else {
                header('Location: /webbanhang/Category');
            }
        }
    }

    // Form sửa
    public function edit($id)
    {
        $category = $this->categoryModel->getCategoryById($id);

        include 'app/view/category/edit.php';
    }

    // Update danh mục
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];

            $this->categoryModel->updateCategory(
                $id,
                $name,
                $description
            );

            header('Location: /webbanhang/Category');
        }
    }

    // Xóa danh mục
    public function delete($id)
    {
        $this->categoryModel->deleteCategory($id);

        header('Location: /webbanhang/Category');
    }
}
?>