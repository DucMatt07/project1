<?php
require_once './includes/connect_db.php';
class homeModel
{
    public $db;
    public function __construct()
    {
        $this->db = connectDB();
    }
    public function renderCategory()
    {
        $stmt = $this->db->query("SELECT * FROM category");
        return $category =   $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //     public function getPhones()
    //     {
    //         $sql = "SELECT pr.product_name, pr.product_sale, pr.product_img, pr.product_old_price, pr.product_new_price, pr.product_smember
    //                 FROM product_type AS pt
    //                 INNER JOIN products AS pr ON pr.product_type_id = pt.id
    //                 WHERE pt.category_id = 1;
    // ";
    //         $stmt = $this->db->query($sql);
    //         return $phones = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    private function getProductsAndTypes($id)
    {
        $sql_products = "SELECT pr.product_name, pr.product_sale, pr.product_img, pr.product_old_price, pr.product_new_price, pr.product_smember, pr.product_id
                FROM product_type AS pt
                INNER JOIN products AS pr ON pr.product_type_id = pt.id
                WHERE pt.category_id = $id";
        $stmt_products = $this->db->query($sql_products);
        $products = $stmt_products->fetchAll(PDO::FETCH_ASSOC);
        $sql_types = "SELECT type_name FROM product_type WHERE category_id = $id";
        $stmt_types = $this->db->query($sql_types);
        $types = $stmt_types->fetchAll(PDO::FETCH_ASSOC);
        $sql_title = "SELECT category_name FROM category WHERE id = $id";
        $stmt_title = $this->db->query($sql_title);
        $title = $stmt_title->fetchAll(PDO::FETCH_ASSOC);
        return [
            'title' => $title,
            'products' =>  $products,
            "type" =>  $types
        ];
    }
    public function renderProductsAndTypes()
    {
        $sql = "SELECT MAX(category_id) AS max_category_id FROM product_type";
        $stmt = $this->db->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxCategory = $result['max_category_id'];
        $data = [];
        for ($i = 1; $i <= $maxCategory; $i++) {
            $data[] = $this->getProductsAndTypes($i);
        }
        return $data;
    }
}
