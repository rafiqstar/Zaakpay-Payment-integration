here<?php

$secret = "09f0ff45caeb4cfcb220635549249c77";

$amount = $_POST['amount'];
$email = $_POST['email'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];

$orderId = "ORD" . time();
$merchantId = "c91ecf93993e4deda3959a7cd9db37d9";

$data = [
    "amount" => $amount,
    "buyerEmail" => $email,
    "buyerFirstName" => $name,
    "buyerLastName" => $lname,
    "buyerPhoneNumber" => $phone,
    "merchantIdentifier" => $merchantId,
    "orderId" => $orderId
];

// checksum generation (YAHI MAIN PART HAI)
$hashString = implode("|", $data);
$checksum = hash_hmac("sha256", $hashString, $secret);

echo "Checksum: " . $checksum;

?>
