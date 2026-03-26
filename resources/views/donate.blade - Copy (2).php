@extends('layouts.app')

@section('title', 'Donate - Support Orphaned Children')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-5">
                <h1 class="display-4 mb-3" style="color: #2c5f2d;">Give the Gift of Hope</h1>
                <p class="lead">Your generosity directly impacts the lives of children who have lost their homes, families, and stability.</p>
            </div>
            
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Make a Donation</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('donation.process') }}" method="POST" id="donationForm">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Select Amount</label>
                            <div class="row g-2 mb-3">
                                <div class="col-4 col-md-2">
                                    <input type="radio" class="btn-check" name="amount" value="25" id="amount25" autocomplete="off">
                                    <label class="btn btn-outline-primary w-100" for="amount25">$25</label>
                                </div>
                                <div class="col-4 col-md-2">
                                    <input type="radio" class="btn-check" name="amount" value="50" id="amount50" autocomplete="off">
                                    <label class="btn btn-outline-primary w-100" for="amount50">$50</label>
                                </div>
                                <div class="col-4 col-md-2">
                                    <input type="radio" class="btn-check" name="amount" value="100" id="amount100" autocomplete="off">
                                    <label class="btn btn-outline-primary w-100" for="amount100">$100</label>
                                </div>
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="amount" value="250" id="amount250" autocomplete="off">
                                    <label class="btn btn-outline-primary w-100" for="amount250">$250</label>
                                </div>
                                <div class="col-6 col-md-3">
                                    <input type="radio" class="btn-check" name="amount" value="500" id="amount500" autocomplete="off">
                                    <label class="btn btn-outline-primary w-100" for="amount500">$500</label>
                                </div>
                            </div>
                            <div class="mt-2">
                                <label class="form-label">Custom Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="custom_amount" placeholder="Enter amount" step="5" min="5">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Donation Type</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="type" value="one_time" id="one_time" checked>
                                <label class="btn btn-outline-primary" for="one_time">One Time</label>
                                
                                <input type="radio" class="btn-check" name="type" value="monthly" id="monthly">
                                <label class="btn btn-outline-primary" for="monthly">Monthly</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Payment Method</label>
                            <select name="payment_method" class="form-select" required>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bank_transfer">Bank Transfer</option>
                            </select>
                        </div>
                        
                        @guest
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="guestDonation">
                                <label class="form-check-label" for="guestDonation">
                                    Donate as guest (or <a href="{{ route('login') }}">login</a>)
                                </label>
                            </div>
                            
                            <div id="guestFields" style="display: none;">
                                <div class="mt-3">
                                    <input type="text" class="form-control mb-2" name="name" placeholder="Full Name">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                        @endguest
                        
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="monthlyNewsletter">
                                <label class="form-check-label" for="monthlyNewsletter">
                                    Send me updates about the children and ministry
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom btn-lg w-100">
                            <i class="fas fa-heart me-2"></i> Proceed to Payment
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Impact Info -->
            <div class="row mt-5">
                <div class="col-md-6 mb-3">
                    <div class="text-center p-3">
                        <i class="fas fa-children fa-3x text-success mb-2"></i>
                        <h5>$50/month feeds a child for a month</h5>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="text-center p-3">
                        <i class="fas fa-graduation-cap fa-3x text-success mb-2"></i>
                        <h5>$100/month provides education for a child</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('guestDonation')?.addEventListener('change', function() {
        document.getElementById('guestFields').style.display = this.checked ? 'block' : 'none';
    });
</script>
@endpush
@endsection