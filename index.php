<!DOCTYPE html>
<html>
<head>
    <title>Simple Zaakpay Shop</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            text-align: center;
        }
        .box {
            background: white;
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        button {
            padding: 10px 15px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>🛒 Simple Zaakpay Shop</h2>

<!-- PRODUCT 1 -->
<div class="box">
    <h3>Product 1</h3>
    <p>Price: ₹1</p>

    <form method="POST" action="checkout.php">

        <input type="hidden" name="amount" value="1.00">

        <!-- 🔥 FIX: Currency added -->
        <input type="hidden" name="currency" value="INR">

        <input type="text" name="name" placeholder="First Name" required><br><br>
        <input type="text" name="lname" placeholder="Last Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Phone" required><br><br>

        <button type="submit">Buy Now</button>
    </form>
</div>

<!-- PRODUCT 2 -->
<div class="box">
    <h3>Product 2</h3>
    <p>Price: ₹2</p>

    <form method="POST" action="checkout.php">

        <input type="hidden" name="amount" value="2.00">

        <!-- 🔥 FIX: Currency added -->
        <input type="hidden" name="currency" value="INR">

        <input type="text" name="name" placeholder="First Name" required><br><br>
        <input type="text" name="lname" placeholder="Last Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Phone" required><br><br>

        <button type="submit">Buy Now</button>
    </form>
</div>

<!-- PRODUCT 3 -->
<div class="box">
    <h3>Product 3</h3>
    <p>Price: ₹5</p>

    <form method="POST" action="checkout.php">

        <input type="hidden" name="amount" value="5.00">

        <!-- 🔥 FIX: Currency added -->
        <input type="hidden" name="currency" value="INR">

        <input type="text" name="name" placeholder="First Name" required><br><br>
        <input type="text" name="lname" placeholder="Last Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Phone" required><br><br>

        <button type="submit">Buy Now</button>
    </form>
</div>

</body>
</html>
