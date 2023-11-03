{{-- product tong --}}

@extends('layout')
@section('content')

		<div class="features_items">
						<h2 class="title text-center">sản phẩm mới</h2>

					@foreach ($all_product as $key => $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{ asset('upload/product/' . $product-> product_image) }}" alt="" />
										<h2>${{$product-> product_price}}</h2>
										<p>{{$product-> product_name}}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<img src="front-end/img/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích so sánh</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
		</div>

@endsection

