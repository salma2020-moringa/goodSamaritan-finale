@extends('layouts.app')

@section('title', 'Complete Your Donation')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Complete Your Donation</h4>
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="fas fa-credit-card fa-4x text-primary"></i>
                    </div>
                    
                    <h3>Donation Amount: ${{ number_format($donation->amount, 2) }}</h3>
                    <p class="text-muted">Transaction ID: {{ $donation->transaction_id }}</p>
                    
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        This is a demo payment page. In production, integrate with Stripe/PayPal.
                    </div>
                    
                    <form action="{{ route('donation.complete', $donation->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary-custom btn-lg w-100">
                            <i class="fas fa-check-circle me-2"></i> Complete Payment (Demo)
                        </button>
                    </form>
                    
                    <a href="{{ route('donate') }}" class="btn btn-link mt-3">Cancel and Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection