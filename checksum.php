here<?php

$secret = "09f0ff45caeb4cfcb220635549249c77";

$amount = trim($_POST['amount']);
$email = trim($_POST['email']);
$name = trim($_POST['name']);
$lname = trim($_POST['lname']);
$phone = trim($_POST['phone']);

$orderId = "ORD" . time();
$merchantId = "c91ecf93993e4deda3959a7cd9db37d9";

/*
👉 IMPORTANT: Zaakpay docs ke exact order me string banao
*/

$hashString =
    $amount . "|" .
    $email . "|" .
    $name . "|" .
    $lname . "|" .
    $phone . "|" .
    $merchantId . "|" .
    $orderId;

$checksum = hash_hmac("sha256", $hashString, $secret);

echo $checksum;

?>
