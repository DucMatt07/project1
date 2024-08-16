<?php
require_once './includes/connect_db.php';
class usersModel
{
    public $db;
    public function __construct()
    {
        $this->db = connectDB();
    }
    public function getUser($user_name)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->execute([$user_name]);
        return $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function createUser($user, $password, $email)
    {
        $sql = "INSERT INTO users (user_name,user_password,email)
                VALUES(?,?,?)
         ";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$user, $password, $email]);
    }
    public function updateUser($password, $img, $address, $id)
    {
        if (!empty($img) && !empty($password) && !empty($address)) {
            $sql = "UPDATE users SET
                    user_password=?,
                    avatar=?,
                    address = ?
                    WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$password, $img, $address, $id]);
        } else if (!empty($img) && !empty($address) && empty($password)) {
            $sql = "UPDATE users SET
            avatar=?,
            address= ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$img, $address, $id]);
        } else if (!empty($img) && empty($address) && !empty($password)) {
            $sql = "UPDATE users SET
            avatar=?,
            user_password= ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$img, $password, $id]);
        } else if (!empty($address) && !empty($password) && empty($img)) {
            $sql = "UPDATE users SET
            user_password=?,
            address = ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$password, $address, $id]);
        } else if (!empty($img) && empty($password) && empty($address)) {
            $sql = "UPDATE users SET
            avatar = ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$img, $id]);
        } else if (empty($img) && !empty($password) && empty($address)) {
            $sql = "UPDATE users SET
            user_password = ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$password, $id]);
        } else {
            $sql = "UPDATE users SET
            address = ?
            WHERE id=?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$address, $id]);
        }
    }
    public function getAllUser()
    {
        $sql  = "SELECT * FROM users";
        $stmt = $this->db->query($sql);
        return $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateUserRole($role, $id)
    {
        $sql = "UPDATE users SET role = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$role, $id]);
    }
}
