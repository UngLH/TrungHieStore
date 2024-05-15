<?php

require_once __DIR__ . '/../vendor/autoload.php';
include (__DIR__ . '/../admin/config/config.php');

use PayOS\PayOS;

session_start();
$payOsClientId = "544627ae-210f-43c4-8e4b-1d7664402bc0";
$payOsApiKey = "f84c0962-4526-47b8-844f-65991d7d396f";
$payOsChecksumKey = "d351feb2a213b11a42631477f5a4b5732012060f08a6f789b08ba3b28041c8f5";

// Initialize PayOS
$payOS = new PayOS($payOsClientId, $payOsApiKey, $payOsChecksumKey);


$DOMAIN = "http://localhost/TrungHieStore";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $amount = intval(number_format($amount, 0, '.', ''));
    $orderCode = intval(substr(strval(microtime(true) * 10000), -6));
    $data = [
        "orderCode" => $orderCode,
        "amount" => $amount,
        "description" => "Test",
        "returnUrl" => $DOMAIN . "/index.php?quanly=camon",
        "cancelUrl" => $DOMAIN . "/cancel.html"
    ];

    try {
        $hoten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $noidung = $_POST['noidung'];
        $code_order = rand(0, 9999);
        $insert_cart_unregistered = "INSERT INTO tbl_cart_unregistered(tenkh, diachi,sdt ,email,noidung,code_cart,cart_status,cart_date ) VALUE ('" . $hoten . "','" . $diachi . "','" . $sdt . "','" . $email . "','" . $noidung . "','" . $code_order . "',1,'" . $now . "')";
        $cart_query_unregistered = mysqli_query($mysqli, $insert_cart_unregistered);
        if ($cart_query_unregistered) {

            $response = $payOS->createPaymentLink($data);
            $insertedID = mysqli_insert_id($mysqli);
            $insert_pay_os = "INSERT INTO tbl_pay_os_order (payos_order_code, cart_type, order_id) 
            VALUES ('$orderCode', 2, '$insertedID')";
            mysqli_query($mysqli, $insert_pay_os);

            foreach ($_SESSION['cart'] as $key => $value) {
                $id_sanpham = $value['id'];
                $soluong = $value['soluong'];
                $insert_order_details = "INSERT INTO tbl_cart_details(id_sp,code_cart,soluongmua) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "')";
                mysqli_query($mysqli, $insert_order_details);
            }


        }
        unset($_SESSION['cart']);
        header("Location: " . $response['checkoutUrl']);
        exit;

    } catch (\Throwable $th) {
        echo $th->getMessage();
        return $th->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>