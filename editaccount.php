<?php
session_start();
include("admin/config/config.php");

// Kiểm tra xem người dùng đã đăng nhập hay chưa
$id_khachhang = $_SESSION['id_khachhang'];
if (!isset($id_khachhang)) {
    header("Location: sign-in.php");
    exit();
}

// Khởi tạo biến để lưu trạng thái của quá trình cập nhật
$update_status = "";

// Lấy thông tin user đang đăng nhập từ database
$sql_get_user = "SELECT * FROM tbl_dangky WHERE id_khachhang = {$id_khachhang}";
$userInfo = mysqli_query($mysqli, $sql_get_user);

$tenkhachhang = "";
$email = "";
$dienthoai = "";
$diachi = "";

while ($row = mysqli_fetch_assoc($userInfo)) {
    $tenkhachhang = $row['tenkhachhang'];
    $email = $row['email'];
    $dienthoai = $row['dienthoai'];
    $diachi = $row['diachi'];
}

// Xử lý sự kiện khi người dùng gửi biểu mẫu chỉnh sửa thông tin
if (isset($_POST['update_account'])) {
    // Nhận dữ liệu từ biểu mẫu
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];
    $_SESSION['dangnhap'] = $tenkhachhang;
    $_SESSION['dangky'] = $tenkhachhang;
    
    // Cập nhật thông tin tài khoản trong cơ sở dữ liệu
    $sql_update = "UPDATE tbl_dangky SET tenkhachhang = '$tenkhachhang', email = '$email', dienthoai = '$dienthoai', diachi = '$diachi' WHERE id_khachhang = {$id_khachhang}";
    $result = mysqli_query($mysqli, $sql_update);
    if ($result) {
        // Cập nhật thành công
        $update_status = "success";
    } else {
        // Cập nhật không thành công
        $update_status = "failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin tài khoản</title>
    <link rel="stylesheet" href="./assets/style/base/reset.css">
    <link rel="stylesheet" href="./assets/style/sign-up.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container_contact">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Chỉnh sửa thông tin tài khoản</h2>
                    <input type="text" class="field" name="hovaten" placeholder="Họ và tên" value="<?php echo $tenkhachhang; ?>">
                    <input type="email" class="field" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <input type="text" class="field" name="sodienthoai" placeholder="Số điện thoại" value="<?php echo $dienthoai; ?>">
                    <input type="text" class="field" name="diachi" placeholder="Địa chỉ" value="<?php echo $diachi; ?>">
                    <input type="submit" name="update_account" value="Cập nhật" class="btn">
                    <p>
                        <a href="index.php">Quay lại</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <!-- Mã JavaScript để hiển thị thông báo alert -->
    <script>
    <?php
    if ($update_status == "success") {
        echo "alert('Cập nhật thông tin tài khoản thành công');";
    } elseif ($update_status == "failed") {
        echo "alert('Có lỗi xảy ra khi cập nhật thông tin tài khoản');";
    }
    ?>
    </script>
</body>

</html>
