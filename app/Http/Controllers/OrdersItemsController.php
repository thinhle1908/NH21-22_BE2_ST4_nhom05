<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders_Items;

class OrdersItemsController extends Controller
{
    public function order_items()
    {
        $order_item = Orders_Items::paginate(2);
        return view('adminOrderItem')->with('order_item',$order_item);
    }
    public function deleteOrderItems($id = null){
        Orders_Items::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Voucher has been delele');
    }
}
