<?php
require_once 'core/Controller.php';
require_once 'app/Models/GiangVienModel.php';

class TrangchuController extends Controller {
    public function index() {
        session_start(); // Bắt đầu phiên làm việc
        $model = new GiangVienModel(); // Tạo một instance của model
        $giangviens = $model->getAllGiangVien(); // Lấy danh sách giảng viên

        $giangvien_login = null; // Khởi tạo biến giảng viên đăng nhập
        if (isset($_SESSION["giangvien"])) {
            $giangvien_login = $model->getGiangVienByEmail($_SESSION["giangvien"]); // Lấy thông tin giảng viên đã đăng nhập
        }
        
        // Gọi view và truyền dữ liệu vào
        $this->view('pages/trangchu', [
            'giangviens' => $giangviens,
            'giangvien_login' => $giangvien_login
        ]);
    }
}
?>