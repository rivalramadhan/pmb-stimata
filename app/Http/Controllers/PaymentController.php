<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('Payment.ManagePayment', compact('payments'));
    }

    public function create()
    {
        return view('Payment.CreatePayment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'status' => 'required|string|in:pending,completed,cancelled',
            'notes' => 'nullable|string|max:255',
            'image_path' => 'required|string|max:255',
        ]);

        Payment::create([
            'fullname' => $request->fullname,
            'amount' => $request->amount,
            'status' => $request->status,
            'notes' => $request->notes,
            'image_path' => $request->image_path,
        ]);

        return view('payment.ManagePayment')->with('success', 'Payment created successfully.');
    }
}
