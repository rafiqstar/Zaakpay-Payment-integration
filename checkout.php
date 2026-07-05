<?php

$secret = "09f0ff45caeb4cfcb220635549249c77";
$merchantId = "c91ecf93993e4deda3959a7cd9db37d9";

// 🔥 Input sanitize

$amount = number_format((float)$_POST['amount'], 2, '.', '');
$phone  = trim($_POST['phone']);

$email = "test@example.com";
$name  = "User";
$lname = "NA";

$orderId = "ORD" . time();
$currency = "INR";

// 🔥 CHECKSUM (SAFE ORDER)
$checksumString =
    $merchantId . "|" .
    $orderId . "|" .
    $amount . "|" .
    $currency . "|" .
    $email . "|" .
    $name . "|" .
    $lname . "|" .
    $phone;

$checksum = hash_hmac("sha256", $checksumString, $secret);

?>

<form id="pay" method="POST" action="https://api.zaakpay.com/transact">

    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="currency" value="<?php echo $currency; ?>">

    <input type="hidden" name="buyerEmail" value="<?php echo $email; ?>">
    <input type="hidden" name="buyerFirstName" value="<?php echo $name; ?>">
    <input type="hidden" name="buyerLastName" value="<?php echo $lname; ?>">
    <input type="hidden" name="buyerPhoneNumber" value="<?php echo $phone; ?>">

    <input type="hidden" name="merchantIdentifier" value="<?php echo $merchantId; ?>">
    <input type="hidden" name="orderId" value="<?php echo $orderId; ?>">

    <input type="hidden" name="checksum" value="<?php echo $checksum; ?>">

</form>

<script>
document.getElementById("pay").submit();
</script>
