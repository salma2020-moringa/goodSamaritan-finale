<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:5',
            'type' => 'required|in:one_time,monthly',
            'payment_method' => 'required|string',
            'name' => 'required_if:is_guest,true|string|nullable',
            'email' => 'required_if:is_guest,true|email|nullable',
        ]);

        // Generate unique transaction ID
        $transactionId = 'GS-' . strtoupper(Str::random(10)) . '-' . time();

        $donation = Donation::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'amount' => $validated['amount'],
            'type' => $validated['type'],
            'status' => 'pending',
            'payment_method' => $validated['payment_method'],
            'currency' => 'USD',
        ]);

        // Here you would integrate with payment gateway (Stripe, PayPal, etc.)
        // For demo, we'll redirect to a payment page
        
        return redirect()->route('donation.payment', $donation->id)
            ->with('success', 'Please complete your payment.');
    }

    public function payment($id)
    {
        $donation = Donation::findOrFail($id);
        return view('donation-payment', compact('donation'));
    }

    public function complete(Request $request, $id)
    {
        $donation = Donation::findOrFail($id);
        
        // Simulate payment processing
        $donation->update([
            'status' => 'completed',
            'completed_at' => now(),
            'payment_details' => ['gateway' => 'test', 'reference' => Str::random(20)],
        ]);

        // Send confirmation email
        // Mail::to($donation->user->email ?? $request->email)->send(new DonationConfirmation($donation));

        return redirect()->route('donation.confirmation', $donation->id)
            ->with('success', 'Thank you for your donation!');
    }

    public function confirmation($id)
    {
        $donation = Donation::findOrFail($id);
        return view('donation-confirmation', compact('donation'));
    }
}