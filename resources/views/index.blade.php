@extends('layouts.master')
@section('title')
	Shopping Cart
@endsection

@section('content')
	@foreach($products->chunk(4) as $productChunk)
	<div class="row">
		@foreach($productChunk as $product)
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<a href="#" class="thumbnail">
			<img data-src="" alt="" src="{{ $product->imagePath }}" class="img-responsive">
		</a>
		<div class="caption text-center description">
			{{ $product->title }}
		</div>
		<div>
		<div class="pull-right price">{{ $product->price }}</div>
		<a type="button" class="btn btn-primary" href="{{ route('product.addToCart',['id'=>$product->id]) }}">Add to cart</a>
		</div>
	</div>

		@endforeach
	</div>
	@endforeach

	
@endsection