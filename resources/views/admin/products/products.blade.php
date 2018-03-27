@extends('layouts.adminmaster')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <h1>Product Management | Admin</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/product/new"><button class="btn btn-success">New Product</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Image</td>
                    <td>Description</td>
                    <td>Nettprice</td>
                    <td>Price</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td><img src="{{$product->imageurl}}" class="img-responsive" style="width: 100px; height: 72px;"></td>
                            <td>{!! $product->description !!}</td>
                            <td>{{$product->nettprice}}Eur</td>
                            <td>{{ number_format($product->getPrice(), 2) }}Eur</td>

                            <td><a href="/admin/product/destroy/{{$product->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                            <td><a href="/admin/product/{{$product->id}}/edit"><button class="btn btn-primary">Edit</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
