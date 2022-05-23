<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receipt_Details;
class ReceipDetailtController extends Controller
{
    public function receipt_detail()
    {
        $receipt_details = Receipt_Details::paginate(2);
        return view('adminReceiptDetail')->with('receipt_details',$receipt_details);
    }
}
