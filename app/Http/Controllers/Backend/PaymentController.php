<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Payment(Request $request){
        $payment=$request->payment;
        echo "$payment";
    }
}
