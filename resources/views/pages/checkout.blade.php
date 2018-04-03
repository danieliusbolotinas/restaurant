@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="bg-img" style="background: url('images/7.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>

<section class="top-section margin-30">
  <div class="container">
    <!-- <div class="row">
    <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
  </div> -->

  <div class="row margin-20">
    <div class="col-sm-12">
      <h2 class="text-center">Checkout</h2>
    </div>
  </div>

  <div class="row" >
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <h4 class="text-center">Your total: {{ $total }} Eur</h4>
      <br>
    </div>

    <div id="charge-error" class="alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
      {{ Session::get('error') }}
    </div>

  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="row dark-gray-bg margin-30">
        <br>
        <form method="POST" action="/checkout" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <fieldset>

            <div id="name" class="form-group col-xs-12 margin-20">
              <input id="name" name="name" type="text" placeholder="Card Holder Name" class="form-control input-md" required="name">
            </div>

            <div id="card-number" class="form-group col-xs-12 margin-20">
              <input id="card-number" name="card-number" type="text" placeholder="Credit Card Number" class="form-control input-md" required="text">
            </div>

            <div id="card-expiry-month" class="form-group col-xs-4 margin-20">
              <input id="card-expiry-month" name="card-expiry-month" placeholder="Expiration Month" class="form-control input-md" required="text">
            </div>

            <div id="card-expiry-year" class="form-group col-xs-4 margin-20">
              <input id="card-expiry-year" name="card-expiry-year" placeholder="Expiration Year" class="form-control input-md" required="text">
            </div>

            <div id="card-cvc" class="form-group col-xs-4 margin-20">
              <input id="card-cvc" name="card-cvc" placeholder="CVC" class="form-control input-md" required="text">
            </div>
            {!! csrf_field() !!}
            <div class="form-group col-xs-12 margin-20">
              <input class="btn btn btn-white btn-sm btn-wide" value="buy" type="submit">
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</section>


@endsection

@section('scripts')

@endsection
