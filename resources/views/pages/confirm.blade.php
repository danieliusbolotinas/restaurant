@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

<div class="bg-img" style="background: url('images/9.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>

<section class="top-section margin-30">
  <div class="container">
    <div class="row">
      <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
    </div>

    <div class="row margin-20">
      <div class="col-sm-12">
        <h2 class="text-center">Reservations</h2>
      </div>
    </div>

    <div class="raw">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h4 class="text-center">Thank you for reserving at Restaurant. <br /> We are pleased to confirm your Reservation.</h4><br /><br />
            </div>
        </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <p>At Prazit, we encourage you to make reservations up to 30 days in advance. <span class="s1">For cancellations or changes to your reservation we ask for a courtesy call no later than noon the day of your reservation.</span></p>
        <br>
      </div>
    </div>


  </div>

</section>


@endsection
