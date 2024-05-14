<?php
$id_danhmuc = $_GET['id'];
$min_price = 0;
$max_price = PHP_INT_MAX; // Giá trị tối đa mặc định

if (isset($_POST['price_range']) && !isset($_POST['reset_filter'])) {
    $price_range = $_POST['price_range'];

    switch ($price_range) {
        case '1000000':
            $max_price = 1000000;
            break;
        case '5000000':
            $min_price = 1000000;
            $max_price = 5000000;
            break;
        case '15000000':
            $min_price = 5000000;
            $max_price = 15000000;
            break;
        case '25000000':
            $min_price = 15000000;
            $max_price = 25000000;
            break;
        case '35000000':
            $min_price = 25000000;
            $max_price = 35000000;
            break;
        case '50000000':
            $min_price = 35000000;
            $max_price = 50000000;
            break;
        case '70000000':
            $min_price = 50000000;
            $max_price = 70000000;
            break;
    }
}

$sql_pro_cate = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$id_danhmuc' AND tbl_sanpham.giasp BETWEEN $min_price AND $max_price ORDER BY id_sp ASC";
$query_pro_cate = mysqli_query($mysqli, $sql_pro_cate);
$num_pro_cate = mysqli_num_rows($query_pro_cate); // Đếm số lượng sản phẩm

$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$id_danhmuc'";
$query_cate = mysqli_query($mysqli, $sql_cate);

$sql_sidebar = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
$query_sidebar = mysqli_query($mysqli, $sql_sidebar);
?>
<div class="page-categories">
    <div class="page-categories-heading">
        <img src="././assets/img/new2.jpg" alt="" class="page-categories-heading-img">
        <?php while ($row_cate = mysqli_fetch_array($query_cate)) { ?>
            <div class="page-categories-heading-text">
                <h2>Danh Mục</h2>
                <p>Trang chủ > <?php echo $row_cate['tendanhmuc'] ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="page-categories-body">
        <div class="page-categories-body-sidebar">
            <p>Danh mục sản phẩm</p>
            <ul class="page-categories-body-sidebar-list">
                <?php while ($row_sidebar = mysqli_fetch_array($query_sidebar)) { ?>
                    <li class="page-categories-item">
                        <a href="index.php?quanly=danhmuc&id=<?php echo $row_sidebar['id_danhmuc'] ?>" class="page-categories-link">
                            <?php echo $row_sidebar['tendanhmuc'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <form action="index.php?quanly=danhmuc&id=<?php echo $id_danhmuc; ?>" method="POST">
                <label for=""><b>LỌC THEO GIÁ</b></label><br>
                <select name="price_range">
                    <option value="1000000">Dưới 1.000.000đ</option>
                    <option value="5000000">Từ 1.000.000đ đến 5.000.000đ</option>
                    <option value="15000000">Từ 5.000.000đ đến 15.000.000đ</option>
                    <option value="25000000">Từ 15.000.000đ đến 25.000.000đ</option>
                    <option value="35000000">Từ 25.000.000đ đến 35.000.000đ</option>
                    <option value="50000000">Từ 35.000.000đ đến 50.000.000đ</option>
                    <option value="70000000">Từ 50.000.000đ đến 70.000.000đ</option>
                </select><br><br>
                <button type="submit" style="
                display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                background: #000000;
                color: #FFFFFF;
                border-radius: 8px;
                padding: 14px 24px 16px;
                font-size: 15px;
                font-weight: 500;
                line-height: 0.5;
                transition: transform 200ms, background 200ms;
                ">Lọc</button>
                <button type="submit" name="reset_filter" style="
                display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                background: #FF0000;
                color: #FFFFFF;
                border-radius: 8px;
                padding: 14px 24px 16px;
                font-size: 15px;
                font-weight: 500;
                line-height: 0.5;
                transition: transform 200ms, background 200ms;
                ">Xóa bộ lọc</button>
            </form>
        </div>
        <div class="page-categories-body-product">
            <?php if ($num_pro_cate > 0) { ?>
                <?php while ($row_pro_cate = mysqli_fetch_array($query_pro_cate)) { ?>
                    <form class="page-categories-body-product-item " action="pages/main/addtocart.php?id=<?php echo $row_pro_cate['id_sp'] ?>" method="POST">
                        <div class="container-product-sales-img">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_cate['hinhanh'] ?>" alt="">
                        </div>
                        <div class="product-icon-cart">
                            <ul class="icon-cart-list">
                                <li class="icon-cart-item">
                                    <div class="add-to-wishlist" data-product-id="<?php echo $row_pro_cate['id_sp'] ?>" data-product-name="<?php echo $row_pro_cate['tensp'] ?>">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </li>
                                <li class="icon-cart-item">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </li>
                                <li class="icon-cart-item">
                                    <i class="fa-solid fa-right-left"></i>
                                </li>
                            </ul>
                        </div>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_cate['id_sp'] ?>&iddm=<?php echo $row_pro_cate['id_danhmuc'] ?>" class="product-title">
                            <?php echo $row_pro_cate['tensp'] ?>
                        </a>
                        <?php if ($row_pro_cate['gia_sale'] > 0) { ?>
                            <p style="text-decoration: line-through;" class="product-price">
                                <?php echo number_format($row_pro_cate['giasp'], 0, '.', '.') . ' vnđ' ?>
                            </p>
                            <p class="product-price-sales">
                                <?php echo number_format($row_pro_cate['gia_sale'], 0, '.', '.') . ' vnđ' ?>
                            </p>
                        <?php } else { ?>
                            <p class="product-price">
                                <?php echo number_format($row_pro_cate['giasp'], 0, '.', '.') . ' vnđ' ?>
                            </p>
                        <?php } ?>
                        <div class="add-to-cart add-cart-action" data-product-id="<?php echo $row_pro_cate['id_sp'] ?>">Thêm giỏ hàng</div>
                    </form>
                <?php } ?>
            <?php } else { ?>
                <p>Không có sản phẩm trong tầm giá này.</p>
            <?php } ?>
        </div>
    </div>
</div>
<div class="go-to-top js-top">
    <a href="#top">
        <i class="fa-solid fa-up-long"></i>
    </a>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const wishlistButtons = document.querySelectorAll('.add-to-wishlist');

    wishlistButtons.forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');
            const productName = this.getAttribute('data-product-name');

            fetch('add_to_wishlist.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: productId, name: productName })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Sản phẩm đã được thêm vào danh sách mong muốn.');
                } else {
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
window.addEventListener("scroll", function() {
    var goTop = document.querySelector(".js-top");
    goTop.classList.toggle("open", window.scrollY > 0);
});
</script>
