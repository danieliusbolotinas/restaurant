@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<div class="bg-img" style="background: url('images/8.jpg') no-repeat center; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover;"></div>
<div class="bg-img-overlay"></div>
<section class="top-section margin-30">
	<div class="container">
		<!-- <div class="row">
		<a href="{{ url('/') }}"><img class="center-block"  src="images/nav-logo.png"/></a>
	</div> -->

	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center">Your Cart</h2><br>
		</div>
	</div>



	@if(Session::has('cart'))
	<div class="row">
		<div class="col-sm-10 col-md-8 col-md-offset-2">
			<div class="row dark-gray-bg margin-30">
				<div class="container">

					<table class="table">
						<thead>
							<tr>
								<th><h4>Products</h4></th>
								<th class="text-center"><h4></h4></th>
								<th class="text-center"><h4>Quantity</h4></th>

								<th class="text-center"><h4>SubTotal</h4></th>
								<th class="text-right"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td class="col-sm-8 col-md-6">
									<div class="media">
										<div class="media-body">
											<h4 class="media-heading"><a href="#">{{ $product['item']['name'] }}</a></h4>
										</div>
									</div>
								</td>
								<td class="col-sm-1 col-md-1" style="text-align: center">

								</td>
								<td class="col-sm-1 col-md-1 text-center">
									<h5>
										<a class="cart_quantity" href="{{ route('product.reduce', ['id'=>$product['item']['id']]) }}"><i class="fa fa-minus-square fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;</a>
										{{ $product ['qty'] }}
										<a class="cart_quantity" href="{{ route('product.increase', ['id'=>$product['item']['id']]) }}">&nbsp;&nbsp;<i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></a>
									</h5>
								</td>
								<td class="col-sm-1 col-md-1 text-center"><h5>{{ number_format($product['price'], 2) }} Eur</h5></td>


								<td class="col-sm-1 col-md-1 text-right">
									<a href="{{ route('product.remove', ['id'=>$product['item']['id']]) }}"> <button type="button" class="btn btn btn-white btn-xs btn-wide">
										<span class="fa fa-times"></span> Remove
									</button>

								</a>
							</td>
						</tr>
						@endforeach

						<tr>
							<td>   </td>
							<td>   </td>
							<td class="text-right"><h4>Total</h4></td>
							<td class="text-center"><h4>{{ number_format($totalPrice, 2) }} Eur</h4></td>

							<td>   </td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td>
								<a href="/menu"> <button type="button" class="btn btn-lg btn-primary">
									<span class="fa fa-shopping-cart"></span> keep ordering
								</button>
							</a></td>
							<td>
								<a href="/checkout"> <button type="button" class="btn btn-lg btn-primary">
									<span class="fa fa-play"></span> ckeckout
								</button>
							</a></td>
						</tr>
					</tbody>
				</table>


			</div>
		</div>
	</div>
</div>


@else
<div class="raw">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<h2 class="text-center">Is empty</h2>
	</div>
</div>
@endif


</div>
</section>

@endsection
