<?php
require_once "./includes/connect_db.php";
class adminModel
{
    public $db;
    public function __construct()
    {
        $this->db  = connectDB();
    }
    public function getCategories()
    {
        $sql = "SELECT DISTINCT cy.category_name, cy.id
        FROM product_type as pt
        INNER JOIN category as cy ON cy.id = pt.category_id
         ";
        $stmt =   $this->db->query($sql);
        return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProducts($id)
    {
        $sql = "SELECT pd.product_name, pd.product_img, pd.product_id, pd.product_old_price, pd.product_new_price, pt.category_id  
        FROM product_type AS pt
        INNER JOIN category AS cy ON cy.id = pt.category_id
        INNER JOIN products AS pd ON pd.product_type_id = pt.id
        WHERE cy.id = $id
        ";
        $stmt = $this->db->query($sql);
        return $products = $stmt->fetchAll();
    }
    public function getProduct($id)
    {
        $sql = "SELECT  pd.product_name, pd.product_img, pd.product_old_price,pd.product_new_price ,pt.type_name, pd.product_type_id,pd.product_id, pd.product_smember
                FROM products AS pd
                INNER JOIN product_type as pt ON pt.id = pd.product_type_id
                WHERE pd.product_id = $id
                ";
        $stmt = $this->db->query($sql);
        return $product = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getProductTypes($categoryID)
    {
        $sql = "SELECT DISTINCT pt.type_name, pt.id
                FROM product_type AS pt
                WHERE pt.category_id = $categoryID";
        $stmt = $this->db->query($sql);
        return $productTypes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTypes()
    {
        $sql = "SELECT pt.type_name, pt.id, cy.category_name
                FROM product_type AS pt
                INNER JOIN category as cy ON cy.id = pt.category_id";
        $stmt = $this->db->query($sql);
        return $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateProduct($name, $img, $oldPrice, $newPrice, $typeID, $id)
    {
        if (!empty($img)) {
            $sql = "UPDATE products SET 
                product_name = ?,
                product_img  = ?,
                product_old_price = ?,
                product_new_price = ?,
                product_type_id = ?
                WHERE product_id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$name, $img, $oldPrice, $newPrice, $typeID, $id]);
        } else {
            $sql = "UPDATE products SET 
                    product_name = ?,
                    product_old_price = ?,
                    product_new_price = ?,
                    product_type_id = ?
                    WHERE product_id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$name, $oldPrice, $newPrice, $typeID, $id]);
        }
    }
    public function createProduct($name, $img, $oldPrice, $newPrice, $sale, $smember, $typeID)
    {
        $sql = "INSERT INTO products 
                (product_name,product_img,product_old_price,product_new_price,product_sale,product_smember,product_type_id)
                VALUES(?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return  $stmt->execute([$name, $img, $oldPrice, $newPrice, $sale, $smember, $typeID]);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products 
                WHERE product_id = $id";
        return $stmt = $this->db->query($sql);
    }
    public function getComment($id)
    {
        $sql = "SELECT cmt.content, cmt.id, us.user_name, cmt.product_id
                FROM comment as cmt
                INNER JOIN users as us ON us.id = cmt.user_id
                WHERE cmt.product_id = $id
                ORDER BY cmt.id DESC";
        $stmt  = $this->db->query($sql);
        return  $commentProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteComment($id)
    {
        $sql = "DELETE FROM comment
        WHERE id = $id";
        return $stmt = $this->db->query($sql);
    }
}
