<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('Payment.Payment');
    }

    public function create()
    {
        return view('Payment.CreatePayment');
    }

    public function store(Request $request)
    {
        

        return redirect()->route('payment.index')->with('success', 'Payment created successfully.');
    }
}
