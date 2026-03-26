@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 mb-4" style="color: #2c5f2d;">Get in Touch</h1>
            <p class="lead">We would be honored to hear from you—whether you want to volunteer, support, invite us to speak, or simply learn more.</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Information -->
        <div class="col-lg-5 mb-4 mb-lg-0">
            <div class="bg-light rounded-4 p-4">
                <h3 class="mb-4" style="color: #2c5f2d;">Contact Information</h3>
                
                <div class="mb-4">
                    <h5><i class="fas fa-user text-success me-2"></i> Bishop Nelson Karegeya</h5>
                    <p class="mb-0">President, Good Samaritans</p>
                    <p><i class="fas fa-phone me-2"></i> (613) 793-5646</p>
                </div>
                
                <div class="mb-4">
                    <h5><i class="fas fa-user text-success me-2"></i> Pastor Edwards Barbarzar</h5>
                    <p class="mb-0">Director - Canada</p>
                    <p><i class="fas fa-phone me-2"></i> (819) 319-6435</p>
                </div>
                
                <div class="mb-4">
                    <h5><i class="fas fa-user text-success me-2"></i> Julius Irakoze</h5>
                    <p class="mb-0">Director - USA</p>
                    <p><i class="fas fa-envelope me-2"></i> juliusirakoze@gmail.com</p>
                </div>
                
                <hr>
                
                <div>
                    <h5><i class="fas fa-map-marker-alt text-success me-2"></i> Location</h5>
                    <p>Mbarara, Uganda</p>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="mb-4" style="color: #2c5f2d;">Send Us a Message</h3>
                    
                    @auth
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <select class="form-select" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="volunteer">Volunteer</option>
                                    <option value="donation">Donation</option>
                                    <option value="sponsorship">Sponsorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" name="message" required placeholder="Tell us how we can help..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                        </form>
                    @else
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Your Name *</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Phone (Optional)</label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Subject *</label>
                                <select class="form-select" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="volunteer">Volunteer</option>
                                    <option value="donation">Donation</option>
                                    <option value="sponsorship">Sponsorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Message *</label>
                                <textarea class="form-control" rows="5" name="message" required placeholder="Tell us how we can help..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                        </form>
                        <p class="text-center mt-3">
                            <small>Already have an account? <a href="{{ route('login') }}">Login here</a></small>
                        </p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection