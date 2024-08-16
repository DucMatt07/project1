<?php
include './model/homeModel.php';
include './model/productDetailsModel.php';
class homeController
{
    public $homeModel;
    public $productDetailsModel;
    public function __construct()
    {
        $this->homeModel = new homeModel;
        $this->productDetailsModel = new productDetailsModal;
    }
    public function goToHome()
    {
        $category = $this->homeModel->renderCategory();
        $data = $this->homeModel->renderProductsAndTypes();
        $sliders = $this->homeModel->getSliders();
        return include './views/index.php';
    }
    public function goToProductDetails($id)
    {
        $this->productDetailsModel->updateView($id);
        $product = $this->productDetailsModel->getProduct($id);
        $productId = $product['product_id'];
        $categoryId = $product['category_id'];
        $sameProducts = $this->productDetailsModel->sameProduct($productId, $categoryId);
        $allCmt = $this->productDetailsModel->getAllCommentProduct($id);
        return include './views/productDetails.php';
    }
    public function sendComment()
    {
        if (isset($_POST['btn-comment'])) {
            $productId = $_POST['product_id'];
            $userId = $_POST['user_id'];
            $content = $_POST['content'];
            $_SESSION['sendComment'] = true;
            if (empty($content)) {
                $_SESSION['emptyComment'] = true;
            } else {
                $this->productDetailsModel->createComment($productId, $userId, $content);
            }
            return header("Location:?action=productDetails&id=$productId");
        }
    }
    public function goToType($id)
    {
        $category = $this->homeModel->renderCategory();
        $products =   $this->homeModel->getProductsAndTypes($id);
        $sliders = $this->homeModel->getSliders();
        return include './views/productType.php';
    }
    public function test($id)
    {
        $category = $this->homeModel->renderCategory();
        $products =   $this->homeModel->getProductsAndTypes($id);
        var_dump($products);
        return include './views/test.php';
    }
    public function searchProduct()
    {
        $nameProduct = $_POST['nameProduct'];
        $products = $this->homeModel->findProduct($nameProduct);
        $category = $this->homeModel->renderCategory();
        $sliders = $this->homeModel->getSliders();
        include './views/searchProduct.php';
    }
}
