here<?php

// Sample Credentials (Replace with your real credentials)
define('MERCHANT_IDENTIFIER', 'c91ecf93993e4deda3959a7cd9db37d9');
define('API_KEY', 'fa3801a07e2845b5b1ddce5f67665b37');
define('SECRET_KEY', '09f0ff45caeb4cfcb220635549249c77');

// Sample Order
$orderId = 'ORDER' . time();
$amount = '100'; // ₹1.00 if Zaakpay expects paise

// Sample checksum placeholder
$checksum = hash(
    'sha256',
    MERCHANT_IDENTIFIER . '|' . $orderId . '|' . $amount . '|' . SECRET_KEY
);

echo $checksum;
?>
