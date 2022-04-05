@extends('layout')

@section('title', 'Latest Products')

@section('content')
<div class=container>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Product name</th>
            <th>Product price</th>
            <th>Stock</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->stock}}</td>
            <td>
                <a href="{{route("product.delete", ['id' => $product->id] )}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
            <td>
                <a href="{{route("product.edit", ['id' => $product->id] )}}" class="btn btn-success btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$products->links()}}
</div>
@endsection