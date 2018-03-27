@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<header>
<!-- Video background -->
<!-- <div class="fullscreen-bg">
    <video playsinline autoplay muted loop poster="images/poster.png" class="fullscreen-bg__video">
        <source src="video/indexmovie.mp4" type="video/mp4">
    </video>
</div> -->

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="home-header">
            <div id="logo-main" class="main-logo hidden-xs"></div>
            <div class="img-responsive"><img class="img-responsive center-block" src="images/restaurant-logo.png" alt="Restaurant"></div>
                <a href="{{ url('/reservation') }}" class="btn btn-lg btn-primary" data-wow-delay="2.8s">Make a reservation</a>
        </div><!--End Home Header-->
    </div>
</div><!--End Row-->
</header>

@endsection
