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
    public function addorders(Request $request)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            $order = new Orders;
            $order->order_name = $data['order_name'];
            $order->order_address = $data['order_address'];
            $order->order_phone = $data['order_phone'];
            $order->order_email = $data['order_email'];
            if($data['order_notes']==null){
                 $note = "Không có";
            }else{
                $note = $data['order_notes'];
            }
            $order->order_notes = $note;
            $order->save();
            return redirect('/dashboard/add-orders')->with('flash_message_success', 'Orders has been added successfully');
        }
        return view('adminAddOrders');
    }
    public function editorders(Request $request,$id = null)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            if($data['order_notes']==null){
                $note = "Không có";
           }else{
               $note = $data['order_notes'];
           }
            Orders::where(['id'=>$id])->update(['order_name' => $data['order_name'], 'order_address' => $data['order_address'],'order_phone'=>$data['order_phone'],'order_email'=>$data['order_email'],'order_notes'=>$note]);
            return redirect()->back()->with('flash_message_success', 'Order has been edit successfully');
        }
        $orderDetail =  Orders::where(['id' => $id])->get();
        return view('adminEditOrders')->with('orderDetail',$orderDetail);
    }
}
