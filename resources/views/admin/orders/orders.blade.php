@extends('layouts.adminmaster')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <h1>Orders Management | Admin</h1>
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
            @foreach($orders as $order)
                    <a href="#">Order #{{$order->id}} - {{$order->name}} - {{$order->created_at}} - <strong> {{ $order->cart->totalPrice }} Eur </strong></a>
                <table class="table table-striped">
                    <thead>


                    <td>Item</td>
                    <td>Quantity</td>
                    <td>Price</td>

                    <td></td>
                    </thead>
                    <tbody>

                    @foreach ($order->cart->items as $item)
                        <tr>

                            <td>{{ $item['item']['name'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>{{ $item['price'] }} Eur</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                  @endforeach
            </div>
        </div>
    </div>




@endsection
