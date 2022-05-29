<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Orders_Items;
use App\Models\Product;

class OrdersItemsController extends Controller
{
    public function order_items()
    {
        $order_item = Orders_Items::paginate(2);
        return view('adminOrderItem')->with('order_item', $order_item);
    }
    public function deleteOrderItems($id = null)
    {
        Orders_Items::where(['id' => $id])->delete();
        return redirect()->back();
    }
    public function addorderitems(Request $request)
    {
        if ($request->ismethod('post')) {
            $request->validate([
                'qty' => 'bail|required|numeric',
            ]);
            $data = $request->all();
            $orderitems = new Orders_Items;
            $orderitems->order_id = $data['order_id'];
            $orderitems->product_id = $data['product_id'];
            $orderitems->qty = $data['qty'];
            $orderitems->price = "$" . $data['price_item'];
            $result = $data['price_item'] * $data['qty'];
            $orderitems->total = "$" . $result;
            $orderitems->save();
            return redirect('/dashboard/add-ordersitems');
        }
        $product = Product::all();
        $order = Orders::all();
        return view('adminAddOrdersItems')->with('product', $product)->with('order', $order);
    }
    public function editorderitems(Request $request, $id = null)
    {
        if ($request->ismethod('post')) {
            $request->validate([
                'qty' => 'bail|required|numeric',
            ]);
            $data = $request->all();
            $result = $data['price_item'] * $data['qty'];
            Orders_Items::where(['id' => $id])->update(['order_id' => $data['order_id'], 'product_id' => $data['product_id'], 'qty' => $data['qty'], 'price' => "$" . $data['price_item'], 'total' => "$" . $result]);
            return redirect()->back();
        }
        $product = Product::all();
        $order = Orders::all();
        $orderitems = Orders_Items::where(['id' => $id])->get();
        return view('adminEditOrdersItems')->with('product', $product)->with('order', $order)->with('orderitems', $orderitems);
    }
}
