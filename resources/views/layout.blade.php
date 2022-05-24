<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | E-Shopper</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://dribbble.com"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="https://google.com"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="{{ asset('index') }}"><img src="{{ asset('images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i>@if(isset(Auth::user()->name )){{Auth::user()->name}} @else  Account @endif</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<!-- <li><a href="{{ asset('checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="{{ asset('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{ asset('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
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
								<li><a href="{{ asset ('index') }}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="{{ asset ('/shop') }}">Products</a></li>
										<li><a href="{{ asset ('/product-details') }}">Product Details</a></li>
										<li><a href="{{ asset ('/checkout.html') }}">Checkout</a></li>
										<li><a href="{{ asset ('/cart') }}">Cart</a></li>
										<li><a href="{{ asset ('/login') }}">Login</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="{{ asset('/blog') }}">Blog List</a></li>
										<li><a href="{{ asset('/blog-single') }}">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="{{ asset('/404') }}">404</a></li>
								<li><a href="{{ asset('contact-us') }}">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="{{ asset ('/shop') }}" class="form-inline">

							<div class="form-group">
								<label class="sr-only" for="">label</label>
								<input class="form-control" name="key" placeholder="Seacrh By Name...">
							</div>



							<button type="submit" class="btn btn-primary1">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->
	@yield('content');

	<footer id="footer">
		<!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('images/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
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
	<!--/Footer-->

	<script src="{{ asset('js/ajax.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
	<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script>
		function addTocart(event) {
			event.preventDefault();
			let urlCart = $(this).data('url');
			$.ajax({
				type: 'GET',
				url: urlCart,
				dataType: 'json',
				success: function(data) {
					if (data.code === 200) {
						alert('Đã thêm thành công sản phẩm vào giỏ hàng')
					}
				},
				error: function() {

				}
			});
		}
		$(function() {
			$('.add-to-cart').on('click', addTocart);
		});
	</script>
	<script>
		function cartUpdate(event) {
			event.preventDefault();
			let urlUpdateCart = $('.update_cart_url').data('url');
			let id = $(this).data('id');
			let quantity = $(this).parents('tr').find('input').val();
			$.ajax({
				type: "GET",
				url: urlUpdateCart,
				data: {
					id: id,
					quantity: quantity
				},
				success: function(data) {
					if (data.code === 200) {
						alert('Cập nhật thành công');
						$('.cart_items').html(data.cart_items);
					}
				},
				error: function() {

				}
			})
		}

		function cartDelete(event) {
			event.preventDefault();
			let urlDelete = $('.delete_cart_url').data('url');
			let id = $(this).data('id')
			$.ajax({
				type: "GET",
				url: urlDelete,
				data: {
					id: id
				},
				success: function(data) {
					if (data.code === 200) {
						alert('Xoá thành công');
						$('.cart_items').html(data.cart_items);
					}
				},
				error: function() {

				}
			})
		}
		function cartVocher(event){
			event.preventDefault();
			let urlVocher = $('.vocher_cart_url').data('url');
			let vocher = $(this).parents('div').find('input').val();
			$.ajax({
				type: "GET",
				url: urlVocher,
				data: {
					vocher: vocher
				},
				success: function(data) {
					if (data.code === 200) {
						alert('Sử dụng thành công vocher');
						$('.cart_items').html(data.cart_items);
					}
				},
				error: function() {

				}
			})
		}
		$(function() {
			$(document).on('click', '.add_vocher', cartVocher)
			$(document).on('click', '.cart_update', cartUpdate);
			$(document).on('click', '.cart_delete', cartDelete);
		});
	</script>
</body>

</html>