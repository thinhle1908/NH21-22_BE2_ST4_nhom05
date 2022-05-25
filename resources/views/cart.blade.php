@extends('layout')
<section class="cart_items">
	@section('content')
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb delete_cart_url" data-url="{{ route('deleteCart') }}">
				<li><a href="{{ asset('index') }}">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed update_cart_url" data-url="{{ route('updateCart') }}">
				<thead>
					<tr class="cart_menu">
						<td class="name">Name</td>
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					@php
					$total = 0;
					@endphp
					@if(!empty($carts))
					@foreach($carts as $id => $value)
					@php
					$total += $value['price'] * $value['quantity'];
					@endphp
					<tr>
						<td class="cart_name">
							<p>{{Str::limit ($value['name'],50) }}</php>
							</p>
						</td>
						<td class="cart_product">
							<a href=""><img class="image-cart" src="images/product-details/{{$value['image']}}" alt=""></a>
						</td>
						<td class="cart_description">
							<p>{{Str::limit ($value['description'],100) }}</php>
							</p>
						</td>
						<td class="cart_price">
							<p>${{ $value['price'] }}</p>
						</td>
						<td><input type="number" size="2" autocomplete="off" value="{{$value['quantity']}}" min="1" step="1" class="cart_quantity_input"></td>
						<td class="cart_total">
							<p class="cart_total_price">${{$value['price'] * $value['quantity'];}}</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete cart_update" data-id="{{ $id }} " href=""><i class="fa fa-repeat"></i></a>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete cart_delete" data-id="{{ $id }} " href=""><i class="fa fa-times"></i></a>
						</td>

					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
</section>
<!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row vocher_cart_url">
			<div class="col-sm-6">
				<div class="chose_area">
					<ul class="user_info">
						<li class="single_field zip-field">
							<form action="{{ asset ('/cart') }}" class="form-inline ">

								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<input class="form-control" name="code" placeholder="Voucher Code">
								</div>
								<button type="submit" class="btn  btn btn-default update btn-primary1">Get Voucher</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span>{{$total}}</span></li>
						<li>Eco Tax <span>{{$total*0.1}}</span></li>
						<li>Shipping Cost <span>Free</span></li>
						@if(!empty($voucher))
						@foreach($voucher as $count)
						<li>Vocher <span>{{$total*$count['voucher_value']/100 }}</span></li>
						@endforeach
						@endif
						<li>Total <span>{{$total+$total*0.1-$total*$count['voucher_value']/100}}</span></li>	
					</ul>
					<a class="btn btn-default update" href="">Update</a>
					<a class="btn btn-default check_out" href="checkout?code={{$total*$count['voucher_value']/100 }}">Check Out</a>
				</div>
			</div>

		</div>
	</div>
</section>
<!--/#do_action-->

@endsection