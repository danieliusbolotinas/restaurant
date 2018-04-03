@extends('layouts.master')

@section('content')


<div class="bg-img" style="background: url('/images/4.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>
<section class="top-section margin-30">
  <div class="container">
    <!-- <div class="row">
    <a href="{{ url('/') }}"><img class="center-block"  src="{{ asset ('images/nav-logo.png') }}"/></a>
  </div> -->

  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Edit Your Profile</h2><br>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="row dark-gray-bg margin-30">
        <br>
        <form class="form-horizontal" role="form" method="POST" action="/profile/update">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> First Name</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ $user->name or '' }}" required autofocus>

              @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label for="last_name" class="col-md-4 control-label">Last Name</label>

            <div class="col-md-6">
              <input id="last_name" type="last_name" class="form-control" name="last_name" value="{{ $user->last_name or '' }}" required>
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ $user->email or '' }}" required>

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
              <input id="password" type="password" class="form-control" name="password" >

              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
            </div>
          </div>


          <div class="form-group">
            <label for="bday" class="col-md-4 control-label">Your Birth Day</label>

            <div class="col-md-6">
              <input id="bday" type="bday" class="form-control" name="bday" value="{{ $user->bday or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="phone" class="col-md-4 control-label">Phone Number</label>

            <div class="col-md-6">
              <input id="phone" type="phone" class="form-control" name="phone" value="{{ $user->phone or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="col-md-4 control-label">Street</label>

            <div class="col-md-6">
              <input id="address" type="address" class="form-control" name="address" value="{{ $user->address or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
              <input id="city" type="city" class="form-control" name="city" value="{{ $user->city or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="zipcode" class="col-md-4 control-label">ZIP Code</label>

            <div class="col-md-6">
              <input id="zipcode" type="zipcode" class="form-control" name="zipcode" value="{{ $user->zipcode or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-md-4 control-label">Country</label>

            <div class="col-md-6">
              <input id="country" type="country" class="form-control" name="country" value="{{ $user->country or '' }}" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <input class="btn btn btn-white btn-sm btn-wide" value="update" type="submit">
            </div>
          </div>
        </form>



      </div>
    </div>
  </div>

</div>
</section>
