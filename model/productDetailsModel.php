<?php
require_once './includes/connect_db.php';
class productDetailsModal
{
    public $db;
    public function __construct()
    {
        $this->db = connectDB();
    }
    public function getProduct($id)
    {
        $sql = "SELECT  pd.product_name, pd.product_img, pd.product_old_price,pd.product_new_price ,pt.type_name, pd.product_type_id,pd.product_id,pd.product_smember,pd.view,pd.content1,pd.content2,pd.content3,pt.category_id
                FROM products AS pd
                INNER JOIN product_type as pt ON pt.id = pd.product_type_id
                WHERE pd.product_id = $id
                ";
        $stmt = $this->db->query($sql);
        return $product = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function sameProduct($id, $categoryId)
    {
        $sql = "SELECT  pd.product_name, pd.product_img, pd.product_old_price,pd.product_new_price ,pt.type_name, pd.product_type_id,pd.product_id,pd.product_smember,pd.view,pd.content1,pd.content2,pd.content3,pt.category_id,pd.product_sale
        FROM products AS pd
        INNER JOIN product_type as pt ON pt.id = pd.product_type_id
        WHERE pd.product_id != $id AND pt.category_id = $categoryId
        ";
        $stmt = $this->db->query($sql);
        return $sameProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateView($id)
    {
        $sql = "UPDATE products SET view = view + 1 WHERE product_id = ? ";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function createComment($productId, $userId, $content)
    {
        $sql = "INSERT INTO comment (product_id,user_id,content) VALUES (?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$productId, $userId, $content]);
    }
    public function getAllCommentProduct($id)
    {
        $sql = "SELECT cmt.content, us.avatar, us.user_name
            FROM comment AS cmt
            INNER JOIN products AS pd ON pd.product_id = cmt.product_id
            INNER JOIN users AS us ON us.id = cmt.user_id
            WHERE pd.product_id = $id
            ORDER BY cmt.id DESC";
        $stmt = $this->db->query($sql);
        return $allCmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
