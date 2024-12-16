<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/dangnhap.css">
</head>

<body>
    <div class="title">
        <img src="public/images/logo.png">
        <h1>QUẢN LÝ CÔNG TÁC CHẤM THI</h1>
        <h3>TH SCHOOL</h3>
    </div>
    <div class="container">
        <form action="index.php?url=dangnhap/login" name="dangnhap" method="post">
            <h2>Đăng nhập</h2>
            <div class="dangnhap">
                <span>Tài khoản</span>
                <input type="text" name="tendn">
            </div>
            <div class="dangnhap">
                <span>Mật khẩu</span>
                <input type="password" name="matkhau">
            </div>
            <br>
            <button name="dn" type="submit">Đăng nhập</button>
        </form>
    </div>
    </div>
</body>

</html>