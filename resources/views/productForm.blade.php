<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product form</title>
</head>
<body>

<form action="/product_discount" method="post">

    @csrf

    <h1>product discount</h1>

    <p>
    Product: <input type="text" name="description" placeholder="nhap ten san pham">
    </p>

    <p>
     Price:  <input type="text" name="price" placeholder="gia niem yet">
    </p>

    <p>
      Discount Percent:  <input type="text" name="discountPercent" placeholder="% chiet khau">
    </p>

    <p>
        <button type="submit">calculation</button>
    </p>
</form>
</body>
</html>
