<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi {{$order->order_name}}</h1>
<table style="width: 100%; border-spacing: 0px">

    <tr>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; width: 153px; padding: 5px;">
            <img src="https://nentang.vn/wp-content/uploads/2018/08/logo-nentang.jpg" style="width: 153px; height: 153px;" />
        </td>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center; vertical-align: middle; padding: 5px;" colspan="3">
            <h1 style="color: red;">Shop bán đồ gia dụng</h1>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px;">
            Thông tin đơn hàng [{{ $order->id }}]
        </td>
    </tr>
    <tr>
        

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Thời gian đặt hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $order->created_at }}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Người Nhận
            </th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $order->order_name }}</td>


    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Địa chỉ
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;"> {{ $order->order_address }}</td> 

    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Số điện thoại
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{ $order->order_phone }}</td>

       
    </tr>
    
</table>
<h2>Thông tin sản phẩm</h2>
    <table style="width: 100%" border="1">
        <thead>
            <tr>
            <th>Name</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
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
                <td><p>{{Str::limit ($value['name'],50) }}</p></td>
                <td><p>{{$value['quantity']}}</p></td>
                
                <td>${{ $value['price'] }}</td>
                <td>${{$value['price'] * $value['quantity'];}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table >
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
                                
</body>
</html>