<?php
require_once 'core/Models.php';

class UserModel extends Model {
    public function checkGiangVien($email, $password) {
        $sql = "SELECT * FROM giangvien WHERE Email = :email AND Matkhau = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkAdmin($email, $password) {
        $sql = "SELECT * FROM admin WHERE emailad = :email AND matkhauad = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>