<?php
include './model/adminModel.php';
include_once './model/usersModel.php';
include_once './model/homeModel.php';
class adminController
{
    public $adminModel;
    public $usersModel;
    public $homeModel;
    public function __construct()
    {
        $this->adminModel = new adminModel;
        $this->usersModel = new usersModel;
        $this->homeModel = new homeModel;
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
            $content1 = $_POST['content1'];
            $content2 = $_POST['content2'];
            $content3 = $_POST['content3'];
            if ($img['error'] === UPLOAD_ERR_OK) {
                $imgName = $img['name'];
                $dir = $folder . $imgName;
                move_uploaded_file($img['tmp_name'], $dir);
                $this->adminModel->updateProduct($name, $imgName, $oldPrice, $newPrice, $typeID, $content1, $content2, $content3, $id);
            } else {
                $imgName = null;
                $this->adminModel->updateProduct($name, $imgName, $oldPrice, $newPrice, $typeID, $content1, $content2, $content3, $id);
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
        $content1 = $_POST['content1'];
        $content2 = $_POST['content2'];
        $content3 = $_POST['content3'];
        $imgName = $img['name'];
        $dir = $folder . $imgName;
        move_uploaded_file($img['tmp_name'], $dir);
        $this->adminModel->createProduct($name, $imgName, $oldPrice, $newPrice, $sale, $smember, $typeID, $content1, $content2, $content3);
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
    public function goToAdminSlider()
    {
        $sliders = $this->homeModel->getSliders();
        return include './views/adminSlider.php';
    }
    public function goToUpdateSlider($id)
    {
        $slider = $this->adminModel->getSlider($id);
        return include './views/updateSlider.php';
    }
    public function startUpdateSlider($id)
    {
        if (isset($_POST['btn-update-slider'])) {
            $folder = './img/';
            $nameProduct = $_POST['nameProduct'];
            $content = $_POST['content'];
            $img = $_FILES['img'];
            if ($img['error'] === UPLOAD_ERR_OK) {
                $imgName = $img['name'];
                $dir = $folder . $imgName;
                move_uploaded_file($img['tmp_name'], $dir);
                $this->adminModel->updateSlider($imgName, $nameProduct, $content, $id);
            } else {
                $imgName = null;
                $this->adminModel->updateSlider($imgName, $nameProduct, $content, $id);
            }
            return header("Location:?action=goToUpdateSlider&id=$id");
        }
    }
    public function goToAdminCategory()
    {
        $categories = $this->adminModel->getAllCategory();
        return include './views/adminCategory.php';
    }
    public function startCreateCategory()
    {
        if (isset($_POST['btn-createCategory'])) {
            $categoryName = $_POST['name'];
            $icon = $_POST['icon'];
            $this->adminModel->createCategory($categoryName, $icon);
            return header("Location:?action=adminCategory");
        }
    }
    public function deleteCategory($id)
    {
        $this->adminModel->deleteCategory($id);
        return header("Location:?action=adminCategory");
    }
    public function goToUpdateCategory($id)
    {
        $category = $this->adminModel->getCategory($id);
        return include './views/updateCategory.php';
    }
    public function startUpdateCategory($id)
    {
        if (isset($_POST['btn-updateCategory'])) {
            $categoryName = $_POST['name'];
            $icon = $_POST['icon'];
            $this->adminModel->startUpdateCategory($categoryName, $icon, $id);
            return header("Location:?action=adminCategory");
        }
    }
}
