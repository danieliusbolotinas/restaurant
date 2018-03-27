@extends('layouts.adminmaster')

@section('Update Product', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Update Product</div>
        </div>
        <div class="panel-body" >
            <form method="PUT" action="/admin/product/update/{{$product->id}}"  class="form-horizontal" enctype="multipart/form-data" role="form">

                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ $product->name or '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category">Category</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Description</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="descrioption">{{ $product->description or '' }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="nettprice">Nett Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nettprice" value="{{ $product->nettprice or '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">Image URL</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="imageurl" value="{{ $product->imageurl or '' }}">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </fieldset>

            </form>
        </div>
    </div>
</div>
@endsection
