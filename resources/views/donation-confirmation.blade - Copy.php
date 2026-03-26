@extends('layouts.app')

@section('title', 'Donation Confirmation')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card shadow">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                    </div>
                    
                    <h2 class="mb-3">Thank You for Your Donation!</h2>
                    <p class="lead">Your generosity will help transform the lives of orphaned and refugee children in Uganda.</p>
                    
                    <div class="alert alert-success">
                        <strong>Donation Amount:</strong> ${{ number_format($donation->amount, 2) }}<br>
                        <strong>Transaction ID:</strong> {{ $donation->transaction_id }}<br>
                        <strong>Date:</strong> {{ $donation->completed_at->format('F j, Y') }}
                    </div>
                    
                    <p>You will receive a confirmation email shortly with your donation receipt.</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('home') }}" class="btn btn-primary-custom">
                            <i class="fas fa-home me-2"></i> Return to Home
                        </a>
                        <a href="{{ route('children.index') }}" class="btn btn-outline-custom ms-2">
                            <i class="fas fa-child me-2"></i> Meet the Children
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection