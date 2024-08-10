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
        return include './views/index.php';
    }
    public function goToProductDetails($id)
    {
        $product = $this->productDetailsModel->getProduct($id);
        $allCmt = $this->productDetailsModel->getAllCommentProduct($id);
        return include './views/productDetails.php';
    }
    public function sendComment()
    {
        if (isset($_POST['btn-comment'])) {
            $productId = $_POST['product_id'];
            $userId = $_POST['user_id'];
            $content = $_POST['content'];
            $this->productDetailsModel->createComment($productId, $userId, $content);
            return header("Location:?action=productDetails&id=$productId");
        }
    }
}
