@extends('layouts.master')

@section('title')
  Laravel Shop Cart
@endsection

@section('content')
  @foreach($products->chunk(3) as $productchunk)
         <div class="row">
     	@foreach($productchunk as $product)
     	    <div class="col-sm-6 col-md-4">
			    <div class="card">
			    	<img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
			      <div class="card-body">
			        <h5 class="card-title">{{ $product->title }}</h5>
			        <p class="card-text">{{ $product->description }}</p>
			        <div class="pull-left price">{{ '$'. $product->price }} </div>
			        <a href="#" class="btn btn-success pull-right">Add to Cart</a>
			      </div>
			    </div>
	  		</div>
     	@endforeach
	 	 
  @endforeach
 
@endsection