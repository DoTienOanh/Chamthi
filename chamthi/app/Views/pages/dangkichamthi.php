<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/tcgv.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="frame">
        <?php include('header_dn.php'); ?>
        <div class="frame2">
            <div class="frame2a">
                <a href="lichchamthi.php">
                    <span>LỊCH CHẤM THI</span>
                </a>
                <a href="dangkichamthi.php">
                    <span>ĐĂNG KÝ CHẤM THI</span>
                </a>
                <a href="doimatkhau.php">
                    <span>ĐỔI MẬT KHẨU</span>
                </a>
            </div>
            <div class="frame2b">
                <?php if (isset($giangvien_login) && $giangvien_login): ?>
                    <a href="thongtincanhan.php" class="namegv">
                        <span><?php echo htmlspecialchars($giangvien_login["TenGV"]); ?></span>
                        <a href="logout.php">
                            <ion-icon name="log-out"></ion-icon>
                        </a>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>
<style>
.frame2a :nth-child(2) {
    background-color: white;
    color: #3593D8;
    height: 50px;
    font-weight: 600;
}
</style>