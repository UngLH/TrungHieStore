<?php
session_start();
include("admin/config/config.php");

if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['sodienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUES ('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
    if ($sql_dangky) {
        header("Location:index.php");
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/style/base/reset.css">
    <link rel="stylesheet" href="./assets/style/sign-up.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container_contact">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Đăng ký</h2>
                    <input type="text" class="field" name="hovaten" placeholder="Họ và tên">
                    <input type="email" class="field" name="email" placeholder="Email">
                    <input type="text" class="field" name="sodienthoai" placeholder="Số điện thoại">
                    <input type="text" class="field" name="diachi" placeholder="Địa chỉ">
                    <input type="password" class="field" name="matkhau" placeholder="Mật khẩu">
                    <input type="submit" name="dangky" value="Đăng ký " class="btn js-btn-dk"></input>
                    <p>
                        Bạn đã có tài khoản.<a href="./sign-in.php">Đăng nhập</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</body>

</html>