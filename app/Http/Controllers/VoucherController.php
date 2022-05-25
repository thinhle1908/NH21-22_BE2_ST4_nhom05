<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function voucher()
    {
        $voucher = Voucher::paginate(2);
        return view('adminVoucher')->with('voucher',$voucher);
    }
    //delete voucher
    public function deleteVoucher($id = null){
        Voucher::where(['voucher_id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Voucher has been delele');
    }
    public function addvoucher(Request $request)
    {
        if($request->ismethod('post')){
            $data = $request ->all();
            $voucher = new Voucher;
            $voucher->voucher_code = $data['voucher_code'];
            $voucher->voucher_value = $data['voucher_value'];
            $voucher->voucher_name = $data['voucher_name'];
            $voucher->save();
            return redirect('/dashboard/add-voucher')->with('flash_message_success','Product has been added successfully');
        }
        return view('adminAddVoucher');
    }
}
