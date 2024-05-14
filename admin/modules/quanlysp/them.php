<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Thêm sản phẩm</p>
<table border="1" style="width: 60%; margin: 0 auto;" class="table table-bordered">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Giá Sale</td>
            <td><input type="text" name="giasale"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <link href="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.snow.css" rel="stylesheet" />

                <!-- Create the editor container -->
                <div id="editor">
                </div>
                <input hidden name="mota" id="motasanpham"></input>

                <!-- Include the Quill library -->
                <script src="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.js"></script>

                <!-- Initialize Quill editor -->
                <script>
                    const quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                    quill.on('text-change', (delta, oldDelta, source) => {
                        document.getElementById("motasanpham").value = quill.getSemanticHTML();
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>