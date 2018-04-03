@extends('layouts.adminmaster')

@section('New Product', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')



<div class="container">
  
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</th>
              <td>{{ $category->name }}</td>
              <td><a href="/admin/categories/destroy/{{$category->id}}"><button class="btn btn-danger">Delete</button></a> </td>

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
            <form method="POST" action="/admin/categories/store" "class="form-horizontal" role="form">

              {!! csrf_field() !!}

              <fieldset>


                <!-- Text input -->

                <div class="form-group">

                  <div class="col-md-12">
                    <label class="col-md-1 control-label" for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Category name" class="form-control input-md" required="">
                  </div>
                </div>



                <!--                     <div class="form-group">
                  <label class="col-md-3 control-label" for="textarea">Description</label>
                  <div class="col-md-3">
                    <textarea class="form-control" id="textarea" name="description"></textarea>
                  </div>
                </div> -->


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
