@extends('layouts.master')

@section('content')


<div class="bg-img" style="background: url('images/3.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>
<section class="top-section margin-30">
    <div class="container">
        <!-- <div class="row">
            <a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
        </div> -->

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">My Orders</h2><br>
            </div>
        </div>

        <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        @foreach($orders as $order)
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                        <li class="list-group-item">
                            <span class="badge">{{ $item['price'] }} Eur</span>
                            {{ $item['item']['name'] }} | {{ $item['qty'] }} Quantity
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div>
            <div class="panel-footer">
                <h4>Total Price: {{ $order->cart->totalPrice }} Eur</h4>
            </div>
        </div>
        <br />
        <br />
        @endforeach
     </div>
        </div>

    </div>
</section>

@endsection
