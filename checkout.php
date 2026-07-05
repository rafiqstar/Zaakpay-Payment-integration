<?php

require_once "config.php";
require_once "checksum.php";

$orderId = "ORD" . time();

$amount = 100; // ₹1 = 100 paisa

$params = [
    "merchantIdentifier" => MERCHANT_IDENTIFIER,
    "orderId" => $orderId,
    "amount" => $amount,
    "currency" => "INR",
    "buyerEmail" => "test@example.com",
    "buyerFirstName" => "Test",
    "buyerPhoneNumber" => "9999999999",
    "productDescription" => "Test Product",
    "returnUrl" => RETURN_URL,
    "txnType" => "1",
    "mode" => "0"
];

$checksum = generateChecksum($params);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>

<body onload="document.getElementById('zaakpayForm').submit();">

<form id="zaakpayForm"
      method="POST"
      action="https://api.zaakpay.com/api/paymentTransact/V8">

<?php foreach($params as $key=>$value){ ?>
<input type="hidden"
       name="<?php echo $key; ?>"
       value="<?php echo htmlspecialchars($value); ?>">
<?php } ?>

<input type="hidden"
       name="checksum"
       value="<?php echo $checksum; ?>">

</form>

</body>
</html>
