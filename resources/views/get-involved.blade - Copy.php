@extends('layouts.app')

@section('title', 'Get Involved - Volunteer, Sponsor or Partner')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4" style="color: var(--primary-green);">Join the Mission</h1>
            <p class="lead">You don't have to travel to Uganda to change a child's life. By partnering with Good Samaritans, you become part of a global family caring for orphaned and refugee children in Jesus' name.</p>
        </div>
    </div>
</section>

<!-- Ways to Get Involved -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Donate</h3>
                    <p>Your financial support helps us provide daily essentials like food, clothing, school fees, and healthcare.</p>
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom mt-3">Donate Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Sponsor a Child</h3>
                    <p>Become a regular sponsor and walk alongside a child through prayer and consistent support.</p>
                    <a href="{{ route('children.index') }}" class="btn btn-primary-custom mt-3">View Children</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Volunteer</h3>
                    <p>Help with fundraising, share our mission, or offer professional skills in Canada, USA, or Uganda.</p>
                    <a href="#volunteer-form" class="btn btn-primary-custom mt-3">Learn More</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3>Partner</h3>
                    <p>Churches and organizations can adopt our project as a mission focus.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary-custom mt-3">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsor a Child Highlight -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('Sponsor-child.jpg') }}" alt="Sponsor a child" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 style="color: var(--primary-green);">Sponsor a Child Today</h2>
                <p class="lead">For just $50/month, you can provide:</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Nutritious meals</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Quality education and school supplies</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Clothing and healthcare</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Spiritual guidance and love</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Regular updates and photos</li>
                </ul>
                <a href="{{ route('children.index') }}" class="btn btn-primary-custom btn-lg mt-3">
                    <i class="fas fa-heart me-2"></i> Find a Child to Sponsor
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Form -->
<section class="py-5" id="volunteer-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-gradient text-white text-center py-4" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));">
                        <h3 class="mb-0">Volunteer With Us</h3>
                    </div>
                    <div class="card-body p-4">
                        @auth
                            <form action="#" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Your Skills</label>
                                        <input type="text" class="form-control" placeholder="e.g., Fundraising, Communications, Accounting">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Availability</label>
                                        <input type="text" class="form-control" placeholder="Weekends, Evenings, Flexible">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">Location</label>
                                        <input type="text" class="form-control" placeholder="City, Country">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">How would you like to help?</label>
                                        <textarea class="form-control" rows="4" placeholder="Tell us how you'd like to contribute..."></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary-custom btn-lg px-5">
                                            <i class="fas fa-paper-plane me-2"></i> Submit Interest
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-lock fa-3x text-muted mb-3"></i>
                                <p class="lead">Please login or register to express your interest in volunteering.</p>
                                <div class="mt-3">
                                    <a href="{{ route('login') }}" class="btn btn-primary-custom me-2">Login</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-custom">Create Account</a>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Support Matters -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Why Your Support Matters</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="text-center p-4">
                    <i class="fas fa-chart-line fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h4>Immediate Impact</h4>
                    <p>Your support provides immediate relief and care for children who have lost everything.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4">
                    <i class="fas fa-seedling fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h4>Long-term Transformation</h4>
                    <p>Investing in children today builds stronger families, churches, and communities tomorrow.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4">
                    <i class="fas fa-hand-holding-heart fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h4>Hope Restored</h4>
                    <p>Many children have no parents and no government support. Good Samaritans is often their only source of stability, love, and hope.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" data-aos="fade-up">
            <div class="p-4 bg-white rounded-4 shadow">
                <p class="lead mb-0">"Your involvement helps us be the hands and feet of Jesus to these children."</p>
                <p class="mt-2"><strong>- Bishop Nelson Karegeya</strong></p>
            </div>
        </div>
    </div>
</section>
@endsection
