<?php

require_once "config.php";

// Generate Unique Order ID
$orderId = "ORD" . time();

// Get Product Details
$product = $_POST['product'] ?? 'Test Product';
$amount  = $_POST['amount'] ?? '1.00';

// Customer Details
$name   = "Test User";
$email  = "test@example.com";
$mobile = "9999999999";

// ----------------------------
// TODO:
// Zaakpay documentation ke hisaab se
// request payload aur checksum generate karein.
// ----------------------------

// Example placeholder values
$merchantIdentifier = "YOUR_MERCHANT_IDENTIFIER";
$checksum = "GENERATED_CHECKSUM";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>
<body onload="document.forms['zaakpay'].submit()">

<form name="zaakpay" method="POST" action="<?= ZAAKPAY_URL; ?>">

    <input type="hidden" name="merchantIdentifier" value="<?= $merchantIdentifier; ?>">
    <input type="hidden" name="orderId" value="<?= $orderId; ?>">
    <input type="hidden" name="amount" value="<?= $amount; ?>">
    <input type="hidden" name="currency" value="<?= CURRENCY; ?>">
    <input type="hidden" name="returnUrl" value="<?= RETURN_URL; ?>">
    <input type="hidden" name="checksum" value="<?= $checksum; ?>">

</form>

</body>
</html>
