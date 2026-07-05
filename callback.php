<?php

require_once "config.php";

// Zaakpay Response
$response = $_POST;

// Transaction Details
$orderId          = $response['orderId'] ?? '';
$transactionId    = $response['pgTransId'] ?? '';
$status           = $response['status'] ?? '';
$amount           = $response['amount'] ?? '';
$responseMessage  = $response['responseMessage'] ?? '';

// ===================================================
// IMPORTANT:
// Yahan Zaakpay documentation ke mutabik
// checksum verify karna zaroori hai.
// Agar checksum verify na ho to payment
// ko valid accept na karein.
// ===================================================

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Payment Status</title>

<style>
body{
font-family:Arial;
background:#f5f5f5;
padding:40px;
}
.box{
max-width:600px;
margin:auto;
background:#fff;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.15);
}
.success{
color:green;
}
.failed{
color:red;
}
</style>

</head>

<body>

<div class="box">

<?php if($status=="SUCCESS"){ ?>

<h2 class="success">✅ Payment Successful</h2>

<?php } else { ?>

<h2 class="failed">❌ Payment Failed</h2>

<?php } ?>

<hr>

<p><b>Order ID:</b> <?php echo htmlspecialchars($orderId); ?></p>

<p><b>Transaction ID:</b> <?php echo htmlspecialchars($transactionId); ?></p>

<p><b>Amount:</b> ₹<?php echo htmlspecialchars($amount); ?></p>

<p><b>Status:</b> <?php echo htmlspecialchars($status); ?></p>

<p><b>Message:</b> <?php echo htmlspecialchars($responseMessage); ?></p>

</div>

</body>
</html>
