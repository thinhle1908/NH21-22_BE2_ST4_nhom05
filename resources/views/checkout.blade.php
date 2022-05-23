@extends('layout')
@section('content')	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			
			<div class="checkout-options">
				
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						
					</div>
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action ="" method ="POST">
									@csrf
									<input type="text" name="order_email" placeholder="Email">
									<input type="text" name="order_name" placeholder="Name">
									
									<input type="text" name="order_address" placeholder="Address">
									<input type="text" name="order_phone" placeholder="Phone">
									<textarea name="order_notes"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
									<input type="submit" value="Send" name="send_order" class="btn btn-primary btn-sm">
									
								</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
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
					@foreach($carts as $id => $value)
					@php
					$total += $value['price'] * $value['quantity'];
					@endphp
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/product-details/{{$value['image']}}" alt="" width="100" height="100"></a>
							</td>
							<td class="cart_description">
								<p>{{Str::limit ($value['name'],50) }}</p>
								
							</td>
							<td class="cart_price">
							<p>${{ $value['price'] }}</p>
							</td>
							
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$value['quantity']}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
							<p class="cart_total_price">${{$value['price'] * $value['quantity'];}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

					@endforeach
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>${{$total}}</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>${{$total*0.1}}</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>${{$total+$total*0.1}}</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	@endsection
	 
