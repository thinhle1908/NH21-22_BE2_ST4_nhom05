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
}
