<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Show</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
        </tr>
        @foreach($product as $pro)
        <tr>
            <th>  {{ $pro->id }}</th>
            <th>{{ $pro->product_name }}</th>
            <th>{{ $pro->product_description }}</th>
            <th>  {{ $pro->product_price }}</th>
        </tr>
        @endforeach
    <table/>

</body>
</html>
