here<?php

$secret = "09f0ff45caeb4cfcb220635549249c77";
$merchantId = "c91ecf93993e4deda3959a7cd9db37d9";

// inputs
$amount = number_format((float)$_POST['amount'], 2, '.', '');
$currency = "INR";

$email = trim($_POST['email']);
$name  = trim($_POST['name']);
$lname = trim($_POST['lname']);
$phone = trim($_POST['phone']);

$orderId = "ORD" . time();

/*
🔥 FINAL SAFE ORDER (MOST COMPATIBLE FORMAT)
👉 This is widely used Zaakpay pattern
*/

$checksumString =
    $merchantId . "|" .
    $orderId . "|" .
    $amount . "|" .
    $currency . "|" .
    $email . "|" .
    $name . "|" .
    $lname . "|" .
    $phone;

// 🔐 Generate checksum
$checksum = hash_hmac("sha256", $checksumString, $secret);

?>
