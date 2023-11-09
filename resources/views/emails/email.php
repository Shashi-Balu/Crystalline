<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Thank you for your order!</h1>

    <p>Your order details:</p>

    @foreach($orderItems as $item)
    <p>Product: {{ $item->productName }}</p>
    <p>Price: {{ $item->price }} Rupees</p>
    @endforeach

    <p>Thank you for choosing us!</p>
</body>

</html>