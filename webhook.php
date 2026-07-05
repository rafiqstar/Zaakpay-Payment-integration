<?php

// Raw POST Data
$txnData = $_POST['txnData'] ?? '';
$checksum = $_POST['checksum'] ?? '';

// Your Secret Key
$secretKey = "YOUR_SECRET_KEY";

// Verify Checksum
$generatedChecksum = hash("sha256", $txnData . $secretKey);

if ($generatedChecksum !== $checksum) {
    http_response_code(400);
    exit("Checksum Verification Failed");
}

// Decode Transaction Data
$data = json_decode($txnData, true);

if (!$data) {
    http_response_code(400);
    exit("Invalid Data");
}

// Save Transaction
file_put_contents(
    "transactions.log",
    date("Y-m-d H:i:s") . PHP_EOL .
    json_encode($data, JSON_PRETTY_PRINT) .
    PHP_EOL . str_repeat("-", 50) . PHP_EOL,
    FILE_APPEND
);

// Success Response
echo "SUCCESS";
?>
