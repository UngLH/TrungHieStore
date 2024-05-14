<?php
include("././admin/config/config.php");
if (isset($_POST['addcomment'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $name_email = $_POST['name_email'];
    $noidung = $_POST['noidung'];
    $sql_cmt = mysqli_query($mysqli, "INSERT INTO tbl_comments(name,name_email,noidung,id_sp) VALUES ('" . $name . "','" . $name_email . "','" . $noidung . "','" . $id . "')");
}
?>
<?php
$sql_desc = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sp = '$_GET[id]' LIMIT 1";
$query_desc = mysqli_query($mysqli, $sql_desc);
?>
<?php
$sql_pro_bonnus = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc = '$_GET[iddm]' LIMIT 5";
$query_pro_bonnus = mysqli_query($mysqli, $sql_pro_bonnus);
?>
<?php
$sql_comment = "SELECT * FROM tbl_sanpham,tbl_comments WHERE tbl_sanpham.id_sp=tbl_comments.id_sp AND tbl_comments.id_sp='$_GET[id]' ORDER BY tbl_comments.id_cmt DESC";
$query_comment = mysqli_query($mysqli, $sql_comment);
?>
<div class="page-product">
    <div class="page-product-heading">
        <img src="././assets/img/new1.jpg" alt="" class="page-product-heading-img">
        <div class="page-product-heading-text">
            <h2>Sản Phẩm</h2>
            <p>Trang chủ > Chi tiết sản phẩm</p>
        </div>
    </div>
    <?php
    while ($row_desc = mysqli_fetch_array($query_desc)) {
    ?>
        <div class="page-product-body">
            <div class="page-product-body-left">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_desc['hinhanh'] ?>" alt="" class="page-product-body-left-img">
            </div>
            <form>
                <div class="page-product-body-right">
                    <h2 class="page-product-body-right-title">
                        <?php echo $row_desc['tensp'] ?>
                    </h2>
                    <p class="page-product-body-right-cate">
                        <?php echo $row_desc['tendanhmuc'] ?>
                    </p>
                    <div class="page-product-body-right-star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <?php
                    if ($row_desc['gia_sale'] > 0) {
                    ?>
                        <p style="text-decoration: line-through;" class="page-product-body-right-price">
                            Giá: <?php echo number_format($row_desc['giasp'], 0, '.', '.') . " vnđ" ?>
                        </p>
                        <p class="page-product-body-right-price-sale">
                            Giá sale: <?php echo number_format($row_desc['gia_sale'], 0, '.', '.') . " vnđ" ?>
                        </p>
                    <?php
                    } else {
                    ?>
                        <p class="page-product-body-right-price">
                            Giá: <?php echo number_format($row_desc['giasp'], 0, '.', '.') . " vnđ" ?>
                        </p>
                    <?php
                    }
                    ?>
                    <p class="page-product-body-right-desc">
                        <?php echo $row_desc['mota'] ?>
                    </p>
                    <div data-product-id="<?php echo $row_desc["id_sp"] ?>" class="page-product-body-right-cart add-cart-action" style="width:273px" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm Giỏ Hàng</div>
                    <div class="page-product-body-right-social">
                        <p><i class="fas fa-share"></i></p>
                        <div class="page-product-body-right-social-list">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    <ul class="page-product-body-right-support">
                        <li class="page-product-body-right-support-item">
                            <i class="fa-solid fa-truck-fast"></i>
                            <p>Giao hàng miễn phí. Các hóa đơn trị giá 200k trở lên</p>
                        </li>
                        <li class="page-product-body-right-support-item">
                            <i class="fa-solid fa-right-left"></i>
                            <p>Hoàn trả miễn phí trong 9 ngày</p>
                        </li>
                        <li class="page-product-body-right-support-item">
                            <i class="fa-solid fa-credit-card"></i>
                            <p>Thanh toán của bạn được an toàn với chúng tôi</p>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    <?php
    }
    ?>
</div>
<div class="container-similar-cmt">
    <div class="cmt-container">
        <!--//todo tab item -->
        <div class="tabs">
            <div class="tabs-item active">
                <i class="tab-icon fa-solid fa-face-grin-stars"></i>
                Khuyến mãi
            </div>
            <div class="tabs-item">
                <i class="tab-icon fa-solid fa-comment"></i>
                Đánh giá
            </div>
            <div class="tabs-item">
                <i class="tab-icon fa-solid fa-star"></i>
                Chính sách bảo hành
            </div>
            <div class="line"></div>
        </div>
        <!-- //todo tab content -->
        <div class="tab-content">
            <div class="tab-pane active">
                <h2>Khuyến mãi</h2>
                <div class="tab-pane-promotion">
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-1"></i>
                        Giảm giá 800,000đ khi tham gia thu cũ đổi mới (Không áp dụng kèm giảm giá qua VNPay, Moca)
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-2"></i>
                        Giảm thêm 5% khi mua cùng sản phẩm bất kỳ có giá cao hơn
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-3"></i>
                        Giảm 50% giá mua gói bảo hiểm 6 tháng (trị giá đến 1,000,000đ)
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-4"></i>
                        Giảm 50% giá win bản quyền, hỗ trợ cài đặt tận nhà
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-5"></i>
                        Nhập mã TGDD12 giảm 5% tối đa 500.000đ cho hóa đơn từ 500.000đ khi thanh toán qua Ví Moca trên
                        ứng dụng Grab
                    </p>
                </div>
            </div>
            <div class="tab-pane">
                <h2>Đánh giá</h2>
                <?php
                while ($row_cmt = mysqli_fetch_array($query_comment)) {
                ?>
                    <div class="tab-pane-cmt">
                        <i class="fa-solid fa-circle-user tab-pane-cmt-icon"></i>
                        <div class="tab-pane-cmt-desc">
                            <p><?php echo $row_cmt['name'] ?></p>
                            <p><?php echo $row_cmt['noidung'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['dangky'])) {
                ?>
                    <button class="btn-cmt js-btn-cmt">
                        Đánh Giá
                    </button>
                <?php
                } else {
                ?>
                    <button class="btn-cmt js-btn-cmt hide">
                        Đánh Giá
                    </button>
                <?php
                }
                ?>
            </div>
            <div class="tab-pane">
                <h2>Chính sách bảo hành</h2>
                <p><b>BẢO HÀNH CÓ CAM KẾT TRONG 12 THÁNG</b><br>
                    + Bảo hành trong vòng 15 ngày (tính từ ngày HTT nhận máy ở trạng thái lỗi và đến ngày gọi khách hàng ra lấy lại máy đã bảo hành).<br>

                    + Sản phẩm không bảo hành lại lần 2 trong 30 ngày kể từ ngày máy được bảo hành xong.<br>

                    + Nếu HieuTechStore vi phạm cam kết (bảo hành quá 15 ngày hoặc phải bảo hành lại sản phẩm lần nữa trong 30 ngày kể từ lần bảo hành trước), Khách hàng được áp dụng phương thức Hư gì đổi nấy ngay và luôn hoặc Hoàn tiền với mức phí giảm 50%.<br>

                    *Từ tháng thứ 13 trở đi không áp dụng bảo hành cam kết, chỉ áp dụng bảo hành hãng (nếu có).<br>
                    <b>HƯ GÌ ĐỔI NẤY NGAY VÀ LUÔN</b><br>
                    + Hư sản phẩm chính thì đổi sản phẩm chính mới<br>
                    - Tháng đầu tiên kể từ ngày mua: miễn phí.<br>
                    - Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.<br>
                    + Hư phụ kiện đi kèm thì đổi phụ kiện có cùng công năng mà HTT/ĐMX đang kinh doanh:
                    mềm không áp dụng, mà chỉ khắc phục lỗi phần mềm<br>
                    +Trường hợp Khách hàng muốn đổi full box (nguyên thùng, nguyên hộp):<br>
                    <b>HOÀN TIỀN</b>
                </p>

            </div>
        </div>
    </div>
    <div class="similar-product-container">
        <p>Sản phẩm tương tự</p>
        <?php
        while ($row_pro_bonus = mysqli_fetch_array($query_pro_bonnus)) {
        ?>
            <div class="similar-product-container-item">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_bonus['hinhanh'] ?>" alt="" class="similar-product-container-item-img">
                <a href="#" class="similar-product-container-item-title">
                    <?php echo $row_pro_bonus['tensp'] ?>
                </a>
                <?php
                if ($row_pro_bonus['gia_sale'] > 0) {
                ?>
                    <p class="similar-product-container-item-price">
                        <?php echo number_format($row_pro_bonus['gia_sale'], 0, '.', '.') . ' vnđ' ?>
                    </p>
                <?php
                } else {
                ?>
                    <p class="similar-product-container-item-price">
                        <?php echo number_format($row_pro_bonus['giasp'], 0, '.', '.') . ' vnđ' ?>
                    </p>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div style="margin-bottom: 50px;"></div>
<div class="container-comment js-container-comment">
    <form class="form-comment js-form-comment" action="" method="POST">
        <p class="form-comment-heading">Hãy để lại feedback của bạn ở đây</p>
        <div class="form-comment-body">
            <p>Nhận xét của bạn *</p>
            <textarea name="noidung" id="" rows="10" placeholder="Hãy viết ý kiến của bạn..."></textarea>
        </div>
        <div class="form-comment-footer">
            <div class="form-comment-footer-left">
                <p>Tên *</p>
                <input type="text" name="name" id="" placeholder="Tên...">
            </div>
            <div class="form-comment-footer-right">
                <p>Email *</p>
                <input type="text" name="name_email" id="" placeholder="Email...">
            </div>
        </div>

        <input class="form-comment-submit" type="submit" value="Gửi đi" name="addcomment">
    </form>
</div>
<div class="go-to-top js-top">
    <a href="#top">
        <i class="fa-solid fa-up-long"></i>
    </a>
</div>

<script>
    const btnComment = document.querySelector(".js-btn-cmt");
    const formComment = document.querySelector(".js-container-comment");
    const modalComment = document.querySelector(".js-form-comment");

    function openCommentForm() {
        formComment.classList.add("open");
    }

    function closeCommentForm() {
        formComment.classList.remove("open")
    }

    btnComment.addEventListener("click", openCommentForm);
    formComment.addEventListener("click", closeCommentForm);
    modalComment.addEventListener("click", function(event) {
        event.stopPropagation();
    })

    window.addEventListener("scroll", function() {
        var goTop = document.querySelector(".js-top");
        goTop.classList.toggle("open", window.scrollY > 0);
    });

    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$('.tabs-item');
    const panes = $$('.tab-pane');

    const tabActive = $('.tabs-item.active');
    const line = $('.tabs .line');

    tabs.forEach((tab, index) => {
        const pane = panes[index]

        tab.onclick = function() {
            $('.tabs-item.active').classList.remove("active");
            $('.tab-pane.active').classList.remove("active");

            line.style.left = this.offsetLeft + 'px';
            line.style.width = this.offsetWidth + 'px';

            this.classList.add("active");
            pane.classList.add("active");
        }
    })
</script>