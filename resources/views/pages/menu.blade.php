@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="bg-img" style="background: url('images/3.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>

<section class="top-section margin-10">
    <div class="container">
        <div class="row">
            <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
        </div>

    <div class="row margin-20">
      <div class="col-sm-12">
        <h2 class="text-center">Our menu</h2>
      </div>
    </div>


    <div class="container">
         <div class="row margin-20">
            <div class="col-md-8 col-md-offset-2 text-center gallery-trigger">
                <ul>
                    <li><a class="filter" data-filter="all">All</a></li>
                    @foreach($categories as $category)
                    <li><a class="filter" data-filter=".{{ $category->name }}">{{ $category->name }}</a></li>
                     @endforeach
                </ul>
            </div>

        <div id="Container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                     @foreach ($products as $product)
                     <span class="clearfix">
                        <div class="mix {{ $product->category->name }}" data-myorder="2">
                            <h5>{{$product->name}}</h5>
                            <p class="white">{!!$product->description!!}<br /><span class="gold">{{ number_format($product->getPrice(), 2) }} Eur</span>&nbsp;&nbsp;&nbsp;<a href="/addProduct/{{$product->id}}" class="btn btn-xs btn-primary"><span class="fa fa-shopping-cart">&nbsp;</span>Order</a></p>
                        </div>
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

        </div>
    </div>

    </div>
</section>
@endsection


@section('scripts')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

<script type="text/javascript">

$(function(){

    $('#Container').mixItUp();

});
</script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".sidenav a").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
          });
        });
    })
</script>
@endsection
