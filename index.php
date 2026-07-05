<?php
$product = "Test Product";
$amount = "1.00";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skyline Store</title>

<style>
body{
    margin:0;
    font-family:Arial,Helvetica,sans-serif;
    background:#f4f4f4;
}
.container{
    width:400px;
    margin:60px auto;
    background:#fff;
    border-radius:12px;
    box-shadow:0 0 10px rgba(0,0,0,.15);
    overflow:hidden;
}
.header{
    background:#0066ff;
    color:#fff;
    text-align:center;
    padding:20px;
}
.card{
    padding:25px;
}
.price{
    font-size:30px;
    color:#28a745;
    font-weight:bold;
}
button{
    width:100%;
    padding:15px;
    background:#0066ff;
    color:#fff;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-size:18px;
}
button:hover{
    background:#0052cc;
}
.footer{
    text-align:center;
    padding:15px;
    color:#777;
    font-size:13px;
}
</style>

</head>
<body>

<div class="container">

<div class="header">
<h2>Skyline Store</h2>
</div>

<div class="card">

<h3><?php echo $product; ?></h3>

<p>Secure payment powered by Zaakpay</p>

<div class="price">
₹<?php echo $amount; ?>
</div>

<br>

<form action="checkout.php" method="POST">

<input type="hidden" name="product" value="<?php echo $product; ?>">

<input type="hidden" name="amount" value="<?php echo $amount; ?>">

<button type="submit">
Buy Now
</button>

</form>

</div>

<div class="footer">
Powered by Skyline Technologies
</div>

</div>

</body>
</html>
