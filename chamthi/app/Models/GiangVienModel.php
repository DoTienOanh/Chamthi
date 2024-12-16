<?php
require_once 'core/Models.php';

class GiangVienModel extends Model { // Kế thừa từ Model
    public function getAllGiangVien() {
        $sql = "SELECT * FROM giangvien"; // Truy vấn lấy tất cả giảng viên
        $stmt = $this->db->prepare($sql); // Sử dụng PDO để chuẩn bị truy vấn
        $stmt->execute(); // Thực thi truy vấn
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về danh sách giảng viên
    }

    public function getGiangVienByEmail($email) {
        $sql = "SELECT * FROM giangvien WHERE Email = :email"; // Sử dụng tham số để tránh SQL Injection
        $stmt = $this->db->prepare($sql); // Chuẩn bị truy vấn
        $stmt->bindParam(':email', $email); // Liên kết tham số
        $stmt->execute(); // Thực thi truy vấn
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về thông tin giảng viên theo email
    }
}
?>