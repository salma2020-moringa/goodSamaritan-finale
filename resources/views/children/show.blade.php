@extends('layouts.app')

@section('title', $child->name . ' - Child Profile')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-lg">
                <div class="row g-0">
                    <div class="col-md-5">
                        @if($child->photo)
                            <img src="{{ Storage::url($child->photo) }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $child->name }}">
                        @else
                            <div class="bg-secondary text-white d-flex align-items-center justify-content-center h-100" style="min-height: 300px;">
                                <i class="fas fa-child fa-5x"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <h2 class="card-title" style="color: #2c5f2d;">{{ $child->name }}</h2>
                            
                            <div class="mb-3">
                                <span class="badge bg-success">{{ $child->status == 'active' ? 'Needs Support' : 'Sponsored' }}</span>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-6">
                                    <strong>Age:</strong> {{ $child->age }} years
                                </div>
                                <div class="col-6">
                                    <strong>Gender:</strong> {{ ucfirst($child->gender) }}
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <strong>Education Level:</strong> {{ $child->education_level ?? 'Primary School' }}
                            </div>
                            
                            <div class="mb-3">
                                <strong>Admission Date:</strong> {{ $child->admission_date->format('F j, Y') }}
                            </div>
                            
                            <div class="mb-4">
                                <strong>Story:</strong>
                                <p class="mt-2">{{ $child->background_story ?? 'This child is waiting for a sponsor to help provide education, food, and care.' }}</p>
                            </div>
                            
                            @if($sponsorshipNeeded)
                                <div class="alert alert-success">
                                    <i class="fas fa-heart me-2"></i> This child is looking for a sponsor!
                                </div>
                                
                                @auth
                                    <form action="{{ route('children.sponsor', $child->id) }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Monthly Sponsorship Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" name="monthly_amount" class="form-control" value="50" step="10" min="20" required>
                                                <span class="input-group-text">/month</span>
                                            </div>
                                            <small class="text-muted">Recommended: $50/month covers education and basic needs</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary-custom w-100">
                                            <i class="fas fa-hand-holding-heart me-2"></i> Sponsor {{ $child->name }}
                                        </button>
                                    </form>
                                @else
                                    <div class="text-center">
                                        <p>Please login to sponsor this child.</p>
                                        <a href="{{ route('login') }}" class="btn btn-primary-custom">Login to Sponsor</a>
                                        <a href="{{ route('register') }}" class="btn btn-outline-custom ms-2">Create Account</a>
                                    </div>
                                @endauth
                            @else
                                <div class="alert alert-info">
                                    <i class="fas fa-check-circle me-2"></i> This child is already sponsored. Thank you to their sponsor!
                                </div>
                                <a href="{{ route('children.index') }}" class="btn btn-primary-custom">
                                    <i class="fas fa-arrow-left me-2"></i> View Other Children
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection