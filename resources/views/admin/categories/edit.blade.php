@extends('layouts.adminmaster')

@section('New Product', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')



<div class="container">
    <h1>Categories Management | Admin</h1>
    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Update Category</div>
                </div>
                <div class="panel-body" >
                    <form method="PUT" action="/admin/category/update/{{$category->id}}" class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                        <fieldset>

                            <div class="form-group">

                                <div class="col-md-12">
                                <label class="col-md-1 control-label" for="name">Name</label>

                                    <input type="text" class="form-control" name="name" value="{{ $category->name or '' }}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-12">
                                 <label class="col-md-12 control-label" for="submit"></label>
                                    <button id="submit" name="submit" class="btn btn-primary">Update</button>
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
