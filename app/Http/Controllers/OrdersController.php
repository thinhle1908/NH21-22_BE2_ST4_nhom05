<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
class OrdersController extends Controller
{
    public function order()
    {
        $order = Orders::paginate(2);
        return view('adminOrders')->with('order',$order);
    }
    public function deleteOrders($id = null){
        Orders::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Voucher has been delele');
    }
}
