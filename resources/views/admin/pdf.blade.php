<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Order Details</h1>
    Customer Name : <h3>{{$order->name}}</h3>
    Email : <h3 style="font-family: 'Courier New', Courier, monospace;"> - has not verified by the system - </h3>
    Phone : <h3>{{$order->phone}}</h3>
    Address : <h3>{{$order->Address}}</h3>
    Customer ID : <h3>{{$order->user_id}}</h3>

    Product Name : <h3>{{$order->product_title}}</h3>
    Product quantity : <h3>{{$order->quantity}}</h3>
    Product price : <h3>{{$order->price}}</h3>
    Payment Status : <h3>{{$order->payment_status}}</h3>
    Delivery Status : <h3>{{$order->delivery_status}}</h3>



</body>
</html>