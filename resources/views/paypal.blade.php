<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay with Paypal</title>
</head>
<body>
    <h3>Price: 100$</h3>
    <form action="{{ route('payment') }}" method="post">
        @csrf
        <input type="hidden" name="amount" value="200">

        <button type="submit">Pay with Paypal</button>
    </form>
</body>
</html>