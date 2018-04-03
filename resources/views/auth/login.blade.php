@extends('layouts.master')

@section('content')

<div class="bg-img" style="background: url('images/6.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>
<section class="top-section margin-30">
  <div class="container">
    <!-- <div class="row">
    <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
  </div> -->

  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Login</h2><br>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="row dark-gray-bg margin-30">
        <br>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <input class="btn btn btn-white btn-sm btn-wide" value="login" type="submit">
            </div>
            <div class="col-md-8 col-md-offset-4">
              <a class="btn btn-link" href="{{ url('/password/reset') }}">
                Forgot Your Password?
              </a>
            </div>
          </div>
        </form>



      </div>
    </div>
  </div>

</div>
</section>



@endsection
