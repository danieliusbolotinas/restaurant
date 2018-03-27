@extends('layouts.adminmaster')

@section('New Product', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

<div class="container">
    <h1>Categories Management | Admin</h1>
    <div class="row">

        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Categories</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td><a href="/admin/category/destroy/{{$category->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                        <td><a href="/admin/category/{{$category->id}}/edit"><button class="btn btn-primary">Edit</button></a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">New Category</div>
                </div>
                <div class="panel-body" >
                    <form method="POST" action="/admin/category/store" class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                        <fieldset>

                            <div class="form-group">

                                <div class="col-md-12">
                                <label class="col-md-1 control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" placeholder="Category name" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-12">
                                 <label class="col-md-12 control-label" for="submit"></label>
                                    <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                                </div>
                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
