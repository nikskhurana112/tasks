@extends('layout')

@section('title', 'Edit Product')

@section('content')
<div class='container'>
    <form action="{{route('product.update')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="">Product Name</label>
        <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Product Price</label>
        <input type="text" name="product_price" value="{{$product->product_price}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input type="text" name="stock" value="{{$product->stock}}" class="form-control">
    </div>
    <input type="hidden" name="id" value="{{$product->id}}">
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection