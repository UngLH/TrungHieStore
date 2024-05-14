<?php

require_once __DIR__ . '/../vendor/autoload.php';
include (__DIR__ . '/../admin/config/config.php');
require (__DIR__ . '/../Carbon/autoload.php');

use PayOS\PayOS;
use Carbon\Carbon;

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
        $response = $payOS->createPaymentLink($data);
        echo $response;

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $id_khachhang = $_SESSION['id_khachhang'];
        $code_order = rand(0, 9999);
        $insert_cart_registered = "INSERT INTO tbl_cart_registered (id_khachhang, code_cart, cart_status, cart_date, payos_order_code) VALUES ('$id_khachhang', '$code_order', 1, '$now', '$orderCode')";
        $cart_query = mysqli_query($mysqli, $insert_cart_registered);
        if ($cart_query) {
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