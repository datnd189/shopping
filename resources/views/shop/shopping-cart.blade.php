@extends('layouts.master')
@section('title')
	Shopping Cart
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 cold-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label lable-success">{{ $product['price'] }}</span>
							<div class="btn-group">
							<button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">Preduce by 1</a></li>
								<li><a href="#">Preduce by all</a></li>
							</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 cold-sm-offset-3">
				<strong>Total: {{ $totalPrice }}</strong>
				<button type="button" class="btn btn-success">Checkout</button>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 cold-sm-offset-3">
				<h2>No Items In Cart</h2>
			</div>
		</div>
	@endif

@endsection