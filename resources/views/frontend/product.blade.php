@extends('frontend.layout.main')

@section('main.container')
<a href="/details?referrer=/page1"></a>
<div class="container">
<div class="row">
@foreach($product as $products)
		<div class="col-lg-4  col-12">
			<div class="single-product">
				<div class="product-img">
                    <input type="hidden" name="id" value="{{$products->ctgry_id}}">
					<a href="{{Route('product.details',$products->product_id)}}">
						<img class="default-img" src="{{asset('images/'.$products->product_image)}}" alt="#">
						<img class="hover-img" src="{{asset('images/'.$products->product_image)}}" alt="#">
					</a>
					<div class="button-head">
						<div class="product-action">
							<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
							<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
							<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
						</div>
						<div class="product-action-2">
						<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $products->product_id }}" name="id">
                        <input type="hidden" value="{{ $products->product_name }}" name="name">
                        <input type="hidden" value="{{ $products->product_price }}" name="price">
                        <input type="hidden" value="{{asset('images/'.$products->product_image)}}"  name="image">
                        <input type="hidden" value="1" name="quantity">
							<button title="Add to cart"  href="">Add to cart</button>
						</form>
						</div>
					</div>
				</div>
				<div class="product-content">
					<h3><a href="/productDetails">{{$products->product_name}}</a></h3>
					<div class="product-price">
						<span>${{$products->product_price}}</span>
					</div>
				</div>
			</div>
		</div>
@endforeach
</div>
</div>
	
@endsection