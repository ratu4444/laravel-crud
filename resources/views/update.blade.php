<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>

<form action="{{ route('products-update',$product->id)  }}" method="post">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Product Name</label>
        <input name="pname" type="text" class="form-control" value="{{ $product->product_name }}" aria-describedby="" placeholder="Product Name">
        <small id="" class="">We'll share your product name with every customer.</small>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input name="description" type="text" class="form-control" value="{{ $product->product_description }}" id="" aria-describedby="" placeholder="Describe your product">
        <small id="" class="">We'll share your product description with every customer.</small>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input name="pprice" type="text" class="form-control" value="{{ $product->product_price }}" id="" aria-describedby="" placeholder="Price">
        <small id="" class="">We'll share your product price with every customer.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>
