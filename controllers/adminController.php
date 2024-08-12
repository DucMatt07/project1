<?php
include './model/adminModel.php';
include_once './model/usersModel.php';
class adminController
{
    public $adminModel;
    public $usersModel;
    public function __construct()
    {
        $this->adminModel = new adminModel;
        $this->usersModel = new usersModel;
    }
    public function goToAdmin($id)
    {
        $data =   $this->adminModel->getCategories();
        $products = $this->adminModel->getProducts($id);
        $selectedCategory = null;
        if (isset($_GET['id'])) {
            $selectedCategory = $_GET['id'];
        }
        return include_once './views/admin.php';
    }
    public function goToUpdate($id, $categoryID)
    {
        $product = $this->adminModel->getProduct($id);
        $selectedType = $product['product_type_id'];
        $productTypes = $this->adminModel->getProductTypes($categoryID);
        return include_once './views/updateProduct.php';
    }
    public function startUpdate($id)
    {
        if (isset($_POST['btn-update'])) {
            $folder = './img/';
            $name = $_POST['name'];
            $oldPrice = $_POST['oldPrice'];
            $newPrice = $_POST['newPrice'];
            $img  = $_FILES['img'];
            $typeID = $_POST['option'];
            if ($img['error'] === UPLOAD_ERR_OK) {
                $imgName = $img['name'];
                $dir = $folder . $imgName;
                move_uploaded_file($img['tmp_name'], $dir);
                $this->adminModel->updateProduct($name, $imgName, $oldPrice, $newPrice, $typeID, $id);
            } else {
                $imgName = null;
                $this->adminModel->updateProduct($name, $imgName, $oldPrice, $newPrice, $typeID, $id);
            }
            return header("Location:?action=admin&id=1");
        }
    }
    public function goToCreate()
    {
        $types = $this->adminModel->getTypes();
        return include './views/createProduct.php';
    }
    public function startCreate()
    {
        $folder = './img/';
        $name = $_POST['name'];
        $oldPrice = $_POST['oldPrice'];
        $newPrice = $_POST['newPrice'];
        $img  = $_FILES['img'];
        $typeID = $_POST['option'];
        $sale = $_POST['sale'];
        $smember = $_POST['smember'];
        $imgName = $img['name'];
        $dir = $folder . $imgName;
        move_uploaded_file($img['tmp_name'], $dir);
        $this->adminModel->createProduct($name, $imgName, $oldPrice, $newPrice, $sale, $smember, $typeID);
        return header("Location:?action=admin&id=1");
    }
    public function startDelete($id)
    {
        $this->adminModel->deleteProduct($id);
        return header('Location:?action=admin&id=1');
    }
    public function goToAdminComment($id)
    {
        $commentProduct = $this->adminModel->getComment($id);
        return include_once './views/adminComment.php';
    }
    public function deleteComment($id, $productId)
    {
        $this->adminModel->deleteComment($id);
        return (header("Location:?action=goToComment&id=$productId"));
    }
    public function goToAdminUser()
    {
        $users = $this->usersModel->getAllUser();
        return include_once './views/adminUser.php';
    }
    public function updateUserRole($id)
    {
        if (isset($_POST['btn-update-role'])) {
            $role = $_POST['role'];
            $this->usersModel->updateUserRole($role, $id);
            return header("Location:?action=adminUser");
        }
    }
}
