<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('Payment.ManagePayment');
    }

    public function create()
    {
        return view('Payment.CreatePayment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|string|min:0',
            'payment_method' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'status' => 'required|string|in:pending,completed,cancelled',
            'notes' => 'nullable|string|max:255',
            'image_path' => 'required|string|max:255',
        ]);

        return view('payment.ManagePayment')->with('success', 'Payment created successfully.');
    }
}
