<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receipt;
class ReceiptController extends Controller
{
    public function receipt()
    {
        $receipt = Receipt::paginate(2);
        return view('adminReceipt')->with('receipt',$receipt);
    }
}
