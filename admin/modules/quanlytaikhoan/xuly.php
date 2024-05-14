<?php
include('../..//config/config.php');

$id = $_GET['idkhachhang'];
$sql_xoa = "DELETE FROM tbl_dangky WHERE id_khachhang='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header('Location:../../index.php?action=quanlytaikhoan&query=lietke');
?>