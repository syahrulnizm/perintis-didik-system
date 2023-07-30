<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        $result = Payment::charge($request);
        return response()->json($result);
    }
}
