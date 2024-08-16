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
        $sql = "SELECT pd.product_name, pd.product_img, pd.product_id, pd.product_old_price, pd.product_new_price, pt.category_id,pd.view 
        FROM product_type AS pt
        INNER JOIN category AS cy ON cy.id = pt.category_id
        INNER JOIN products AS pd ON pd.product_type_id = pt.id
        WHERE cy.id = $id
        ORDER BY pd.view DESC
        ";
        $stmt = $this->db->query($sql);
        return $products = $stmt->fetchAll();
    }
    public function getProduct($id)
    {
        $sql = "SELECT  pd.product_name, pd.product_img, pd.product_old_price,pd.product_new_price ,pt.type_name, pd.product_type_id,pd.product_id, pd.product_smember,pd.content1,pd.content2,pd.content3
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
    public function updateProduct($name, $img, $oldPrice, $newPrice, $typeID, $content1, $content2, $content3, $id)
    {
        if (!empty($img)) {
            $sql = "UPDATE products SET 
                product_name = ?,
                product_img  = ?,
                product_old_price = ?,
                product_new_price = ?,
                product_type_id = ?,
                content1 = ?,
                content2 = ?,
                content3 = ?
                WHERE product_id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$name, $img, $oldPrice, $newPrice, $typeID, $content1, $content2, $content3, $id]);
        } else {
            $sql = "UPDATE products SET 
                    product_name = ?,
                    product_old_price = ?,
                    product_new_price = ?,
                    product_type_id = ?,
                    content1 = ?,
                    content2 = ?,
                    content3 = ?
                    WHERE product_id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$name, $oldPrice, $newPrice, $typeID, $content1, $content2, $content3, $id]);
        }
    }
    public function createProduct($name, $img, $oldPrice, $newPrice, $sale, $smember, $typeID, $content1, $content2, $content3)
    {
        $sql = "INSERT INTO products 
                (product_name,product_img,product_old_price,product_new_price,product_sale,product_smember,product_type_id,content1,content2,content3)
                VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return  $stmt->execute([$name, $img, $oldPrice, $newPrice, $sale, $smember, $typeID, $content1, $content2, $content3]);
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
    public function getSlider($id)
    {
        $sql = "SELECT * FROM sliders WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return  $slider = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateSlider($img, $nameProduct, $content, $id)
    {
        if (!empty($img)) {
            $sql = "UPDATE sliders 
                SET img=?,slider_product_name=?,content=?
                WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$img, $nameProduct, $content, $id]);
        } else {
            $sql = "UPDATE sliders 
            SET slider_product_name=?,content=?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$nameProduct, $content, $id]);
        }
    }
    public function getAllCategory()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->db->query($sql);
        return $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createCategory($categoryName, $icon)
    {
        $sql = "INSERT INTO category(category_name,icon) VALUES(?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$categoryName, $icon]);
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM category WHERE id =?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function getCategory($id)
    {
        $sql = "SELECT * FROM category WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $category =  $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function startUpdateCategory($categoryName, $icon, $id)
    {
        $sql = "UPDATE category SET category_name = ?,icon = ? WHERE id =?  ";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$categoryName, $icon, $id]);
    }
}
