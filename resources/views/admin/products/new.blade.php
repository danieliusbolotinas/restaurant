@extends('layouts.adminmaster')

@section('New Product', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">New Product</div>
      </div>
      <div class="panel-body" >
        <form method="POST" action="/admin/product/store" class="form-horizontal" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="">
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
                <textarea class="form-control" id="textarea" name="description"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="nettprice"> NettPrice</label>
              <div class="col-md-9">
                <input id="nettprice" name="nettprice" type="text" placeholder="Nett price" class="form-control input-md" required="">

              </div>
            </div>


            <div class="form-group">
              <label class="col-md-3 control-label" for="imageurl">Image URL</label>
              <div class="col-md-9">
                <input id="imageurl" name="imageurl" type="text" placeholder="Image URL" class="form-control input-md" >

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="submit"></label>
              <div class="col-md-9">
                <button id="submit" name="submit" class="btn btn-primary">Insert</button>
              </div>
            </div>

          </fieldset>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
