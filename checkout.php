here<?php

$secret = "09f0ff45caeb4cfcb220635549249c77";
$merchantId = "c91ecf93993e4deda3959a7cd9db37d9";

// 🔹 Receive & sanitize input
$amount = number_format((float)$_POST['amount'], 2, '.', '');
$email  = trim($_POST['email']);
$name   = trim($_POST['name']);
$lname  = trim($_POST['lname']);
$phone  = trim($_POST['phone']);

// 🔹 Order ID
$orderId = "ORD" . time();

// 🔥 IMPORTANT: EXACT ORDER (Zaakpay safe format)
$hashString =
    $amount . "|" .
    $email . "|" .
    $name . "|" .
    $lname . "|" .
    $phone . "|" .
    $merchantId . "|" .
    $orderId;

// 🔹 Generate checksum
$checksum = hash_hmac("sha256", $hashString, $secret);

?>

<!-- 🔥 Redirect form to Zaakpay -->
<form id="zaakpayForm" method="POST" action="https://api.zaakpay.com/transact">

    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="buyerEmail" value="<?php echo $email; ?>">
    <input type="hidden" name="buyerFirstName" value="<?php echo $name; ?>">
    <input type="hidden" name="buyerLastName" value="<?php echo $lname; ?>">
    <input type="hidden" name="buyerPhoneNumber" value="<?php echo $phone; ?>">

    <input type="hidden" name="merchantIdentifier" value="<?php echo $merchantId; ?>">
    <input type="hidden" name="orderId" value="<?php echo $orderId; ?>">

    <input type="hidden" name="checksum" value="<?php echo $checksum; ?>">

</form>

<script>
document.getElementById("zaakpayForm").submit();
</script>
