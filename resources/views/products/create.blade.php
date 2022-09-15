@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Add product</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{  route( 'products.index')  }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <strong>Whoops!</strong> There were some problems with your input <br> <br>
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>   
        @endforeach
    </ul>
</div>   
@endif
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea name="detail" id="detail" cols="80" rows="10"></textarea>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </div>



</form>


@endsection