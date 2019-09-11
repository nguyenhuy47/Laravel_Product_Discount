
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>discount calculation</title>
</head>
<body>
<?php
$discount_amount = $price*$discountPercent*0.01;
$discount_price = $price - $discount_amount;
?>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>{{ $description }}</span><br/>
    <label>Price: </label>
    <span>$ {{ $price }}</span><br/>
    <label>Discount Percent: </label>
    <span> {{ $discountPercent }} %</span><br/>
    <label>Discount Amount: </label>
    <span>$ {{ $discount_amount }}</span><br/>
    <label>Discount Price: </label>
    <span>$ {{ $discount_price }}</span><br/>
</div>
</body>
</html>
