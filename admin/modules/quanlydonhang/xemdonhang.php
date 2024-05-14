<?php
$code = $_GET['code'];
$sql_lietke_donhang = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sp = tbl_sanpham.id_sp AND tbl_cart_details.code_cart='" . $code . "' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_donhang = mysqli_query($mysqli, $sql_lietke_donhang);
if(isset($_POST['status'])){
    $status = $_POST['status'];
    mysqli_query($mysqli,"UPDATE tbl_cart_registered SET cart_status = '$status' WHERE code_cart = $code");
}
if (isset($_POST['status'])){
    $status = $_POST['status'];
    mysqli_query($mysqli,"UPDATE tbl_cart_unregistered SET cart_status = '$status' WHERE code_cart = $code");
}
?>

<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Xem chi tiết đơn hàng</p>
<table style="width: 90%; margin: 0 auto;" class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Giá sale</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <?php
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($query_lietke_donhang)) {
        $i++;
        if ($row['gia_sale'] > 0) {
            $thanhtien = $row['soluongmua'] * $row['gia_sale'];
            $tongtien += $thanhtien;
            $i++;
        } else {
            $thanhtien = $row['soluongmua'] * $row['giasp'];
            $tongtien += $thanhtien;
            $i++;
        }
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['soluongmua'] ?></td>
            <td><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></td>
            <td><?php echo number_format($row['gia_sale'], 0, ',', '.') . 'vnđ' ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="6">
            <p>Trạng thái đơn hàng</p>
            <form action="" method="POST">
                <label>Trạng thái :</label><br>
                <select name="status" id="" class="" required="required">
                    <option value="0">Đã xác nhận</option>
                    <option value="1">Đang xử lý</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Giao hàng thành công</option>
                    <option value="4">Hủy</option>
                </select>
                <button type="submit" style="
                display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                background: #000000;
                color: #FFFFFF;
                border-radius: 8px;
                padding: 14px 24px 16px;
                font-size: 18px;
                font-weight: 700;
                line-height: 1;
                transition: transform 200ms,background 200ms;
                :hover{
                    transform: translateY(-2px);
                }
                ">Cập nhật</button>

            </form>
        </td>
        <td colspan="1" style="float: left;border:0px;">
            <p style="float: right;">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
        </td>

    </tr>

</table>

<div style="clear: both;"></div>