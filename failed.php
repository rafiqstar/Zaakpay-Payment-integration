<?php

$orderId = $_GET['orderId'] ?? '';
$txnId   = $_GET['txnId'] ?? '';
$amount  = $_GET['amount'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Successful</title>

<style>
body{
margin:0;
font-family:Arial,sans-serif;
background:#f4f4f4;
}

.container{
max-width:600px;
margin:60px auto;
background:#fff;
padding:30px;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,.15);
text-align:center;
}

.success{
font-size:70px;
color:#16a34a;
}

h2{
color:#16a34a;
}

.info{
text-align:left;
margin-top:25px;
background:#f9f9f9;
padding:20px;
border-radius:10px;
}

.info p{
margin:10px 0;
}

.btn{
display:inline-block;
margin-top:25px;
padding:12px 30px;
background:#16a34a;
color:#fff;
text-decoration:none;
border-radius:8px;
}

.footer{
margin-top:30px;
font-size:13px;
color:#666;
}
</style>

</head>

<body>

<div class="container">

<div class="success">✔</div>

<h2>Payment Successful</h2>

<p>Your payment has been processed successfully.</p>

<div class="info">

<p><strong>Order ID:</strong> <?php echo htmlspecialchars($orderId); ?></p>

<p><strong>Transaction ID:</strong> <?php echo htmlspecialchars($txnId); ?></p>

<p><strong>Amount:</strong> ₹<?php echo htmlspecialchars($amount); ?></p>

</div>

<a href="index.php" class="btn">Continue Shopping</a>

<div class="footer">
Powered by Skyline Technologies
</div>

</div>

</body>
</html>
