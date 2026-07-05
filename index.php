here<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Store</title>

<style>
body{
    font-family: Arial;
    background:#f5f5f5;
    margin:0;
}

.container{
    max-width:500px;
    margin:50px auto;
}

.card{
    background:#fff;
    padding:20px;
    margin-bottom:15px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    text-align:center;
}

.price{
    font-size:22px;
    color:green;
    margin:10px 0;
}

button{
    width:100%;
    padding:10px;
    border:none;
    background:#007bff;
    color:#fff;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
}
</style>

</head>
<body>

<div class="container">

<!-- PRODUCT 1 -->
<div class="card">
    <h3>Product 1</h3>
    <div class="price">₹1</div>
    <form action="checkout.php" method="POST">
        <input type="hidden" name="product" value="Product 1">
        <input type="hidden" name="amount" value="1">
        <button type="submit">Buy Now</button>
    </form>
</div>

<!-- PRODUCT 2 -->
<div class="card">
    <h3>Product 2</h3>
    <div class="price">₹2</div>
    <form action="checkout.php" method="POST">
        <input type="hidden" name="product" value="Product 2">
        <input type="hidden" name="amount" value="2">
        <button type="submit">Buy Now</button>
    </form>
</div>

<!-- PRODUCT 3 -->
<div class="card">
    <h3>Product 3</h3>
    <div class="price">₹5</div>
    <form action="checkout.php" method="POST">
        <input type="hidden" name="product" value="Product 3">
        <input type="hidden" name="amount" value="5">
        <button type="submit">Buy Now</button>
    </form>
</div>

</div>

</body>
</html>
