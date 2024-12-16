<?php
require_once 'core/Controller.php';
require_once 'app/Models/UserModel.php';

class DangnhapController extends Controller {
    public function index() {
        // Hiển thị trang đăng nhập
        $this->view('pages/dangnhap');
    }
    
    public function login() {
        // Kiểm tra xem có dữ liệu POST không
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['tendn'];
            $password = $_POST['matkhau'];

            // Tạo một instance của model
            $model = new UserModel();

            // Kiểm tra thông tin đăng nhập cho giảng viên
            $giangVien = $model->checkGiangVien($email, $password);
            if ($giangVien) {
                session_start();
                $_SESSION['giangvien'] = $email; // Lưu thông tin vào session
                header('Location: index.php?url=dangkichamthi'); // Chuyển hướng đến trang đăng ký chấm thi
                exit();
            }

            // Kiểm tra thông tin đăng nhập cho admin
            $admin = $model->checkAdmin($email, $password);
            if ($admin) {
                session_start();
                $_SESSION['admin'] = $email; // Lưu thông tin admin vào session
                header('Location: index.php?url=bomon'); // Chuyển hướng đến trang admin
                exit();
            }

            // Nếu thông tin không đúng, hiển thị thông báo lỗi
            $error = "Sai tên đăng nhập hoặc mật khẩu.";
            $this->view('pages/dangnhap', ['error' => $error]);
        }
    }
}
?>