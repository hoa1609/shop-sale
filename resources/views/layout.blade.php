<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My web</title>
	<link href="{{ asset('front-end/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/price-range.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/css/responsive.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <link rel="shortcut icon" href="{{asset('front-end/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 1234567</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> bocongannh.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href=""><img src="{{asset('front-end/img/GAYA.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

						{{-- KT thanh toán --}}
								<?php 
								$customer_id = Session::get('customer_id');
								if($customer_id != null){
									?>
									<li><a href="{{ route('checkout')}}"><i class="fa fa-shopping-cart"></i>Thanh toán</a></li>

								<?php
								}else {
									?>
									<li><a href="{{ route('login-checkout')}}"><i class="fa fa-lock"></i> Thanh toán</a></li>
								<?php
								}
									?>
						{{-- thanh toán end --}}

								<li><a href="{{ route('show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>

						{{--KT đăng nhập --}}
								<?php 
								$customer_id = Session::get('customer_id');
								if($customer_id != null){
									?>
									<li><a href="{{ route('login-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
								<?php
								}else {
									?>
									<li><a href="{{ route('login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<?php
								}
									?>
						{{-- đăng nhập end--}}

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="trang-chu" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    
                                </li> 
								<li><a href="404.html">Giỏ hàng</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{asset('front-end/img/slide1.jpg')}}" class="girl img-responsive" alt="" />
							</div>
							<div class="item">
								<img src="{{asset('front-end/img/slide2.jpg')}}" class="girl img-responsive" alt="" />
							</div>
							
							<div class="item">
								<img src="{{asset('front-end/img/slide3.jpg')}}" class="girl img-responsive" alt="" />
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian">
							
					@foreach ($category as $key =>$cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="{{ route('danh-muc-san-pham', $cate-> category_id)}}">
											{{$cate-> category_name}}
										</a>
									</h4>
								</div>
							</div>
					@endforeach

				</div>
						<div class="brands_products">
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">

							@foreach ($brand as $key =>$brand)
									<li>
										<a href="{{ route('thuong-hieu-san-pham', $brand-> brand_id)}}"> 
											<span class="pull-right"></span>
											{{$brand-> brand_name}}
										</a>
									</li>
							@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

				

					@yield('content')
		
					
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>về chúng tôi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Liên hệ</a></li>
								<li><a href="#">Hệ thống của hàng</a></li>
								<li><a href="#">Tuyển dụng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Trung tâm trợ giúp</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hướng dẫn mua hàng</a></li>
								<li><a href="#">Hướng dẫn size</a></li>
								<li><a href="#">Chính sách bảo hàng & đổi trả</a></li>
								<li><a href="#">Chính sách vận chuyển</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chăm sóc khách hàng 24/7</a></li>
								<li><a href="#">Tại trực tiếp cửa hàng</a></li>
								<li><a href="#">Qua online</a></li>
								<li><a href="#">0811999999</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Gửi tới shop</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận thông tin cập nhật mới nhất từ
									​​trang web của chúng tôi và tự cập nhật..</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer>

  
    <script src="{{asset('front-end/js/jquery.js')}}"></script>
	<script src="{{asset('front-end/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front-end/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('front-end/js/price-range.js')}}"></script>
    <script src="{{asset('front-end/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('front-end/js/main.js')}}"></script>


	
	{{-- js bình luận --}}
	<script type="text/javascript">
		$(document).ready(function(){
			load_comment();
	
			function load_comment(){
				var product_id = $('.comment_product_id').val();
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url: "{{ route('load_comment') }}",
					method: "post",
					data: {product_id: product_id, _token: _token},
					success: function(data){
						$('#comment_show').html(data);
					}
				});
			}

			$('.send-comment').click(function () {
				var product_id = $('.comment_product_id').val();
				var comment_name = $('.comment_name').val();
				var comment_content = $('.comment_content').val();
				var _token = $('input[name="_token"]').val();

				$.ajax({
					url: "{{ route('send_comment') }}",
					method: "post",
					data: {product_id: product_id, comment_name: comment_name,comment_content: comment_content ,_token: _token},
					success: function(data){
						$('#comment_show').html(data){
							load_comment();
							$('#notify_comment').html('<p class="text text-success">Thêm bình luận thành công</p>');
						}
					}
				});
			})
		});
	</script>






</body>
</html>