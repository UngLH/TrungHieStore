<?php

require_once __DIR__ . '/../vendor/autoload.php';
use PayOS\PayOS;

$payOsClientId = "544627ae-210f-43c4-8e4b-1d7664402bc0";
$payOsApiKey = "f84c0962-4526-47b8-844f-65991d7d396f";
$payOsChecksumKey = "d351feb2a213b11a42631477f5a4b5732012060f08a6f789b08ba3b28041c8f5";

$mysqli = new mysqli("localhost", "root", "", "mstorebuy");
$payOS = new PayOS($payOsClientId, $payOsApiKey, $payOsChecksumKey);

try {
    $body = file_get_contents('php://input');
    $webhookData = json_decode($body, true);
    if ($webhookData['data']['description'] == "VQRIO123") {
        return true;
    }
    $response = $payOS->verifyPaymentWebhookData($webhookData);
    $orderCode = (int) $webhookData['data']['orderCode'];
    $payOSOrderQuery = "SELECT * FROM tbl_pay_os_order WHERE payos_order_code='$orderCode'";
    $payOsOrderResult = $mysqli->query($payOSOrderQuery);
    if ($payOsOrderResult->num_rows > 0) {
        $payOsOrder = $payOsOrderResult->fetch_assoc();

        if ($payOsOrder['cart_type'] == 1) {
            $cartOrderId = $payOsOrder['order_id'];
            $sql_update = "UPDATE tbl_cart_registered SET cart_status=2 WHERE id_cart_registered=$cartOrderId";
            if ($mysqli->query($sql_update) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $mysqli->error;
            }
        }
    } else {
        echo "No records found";
    }
    return $response;
} catch (\Throwable $th) {
    error_log($th);
    return $th->getMessage();
}