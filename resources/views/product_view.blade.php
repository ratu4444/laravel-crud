<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Show</title>
</head>
{{--    <a href="{{ route('products-edit', $product->id)  }}">Delete</a>--}}
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($product as $pro)
        <tr>
            <th>  {{ $pro->id }}</th>
            <th>{{ $pro->product_name }}</th>
            <th>{{ $pro->product_description }}</th>
            <th>  {{ $pro->product_price }}</th>
            <th><a href="{{ route('products-edit', $pro->id) }}">Edit</a> </th>
            <form action="{{ route('products-destroy', $pro->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <th><a href="{{ route('')  }}">Delete</a> </th>
            </form>
        </tr>
        @endforeach

    <table/>

</body>
</html>
