@extends('layouts.app')

@section('title', 'Home - Christian Orphan Care in Uganda')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg-shape"></div>
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-7 hero-content" data-aos="fade-right">
                <h1 class="hero-title">Where we value people, <br>one child at a time.</h1>
                <p class="lead mb-4">Good Samaritans is a Christian, nonprofit community serving orphaned and vulnerable children from refugee families, with a special focus on children from the Democratic Republic of Congo now living in Uganda.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom btn-lg">
                        <i class="fas fa-heart me-2"></i> Donate Now
                    </a>
                    <a href="{{ route('get-involved') }}" class="btn btn-outline-custom btn-lg">
                        <i class="fas fa-hands-helping me-2"></i> Become a Sponsor
                    </a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Children in Uganda" class="img-fluid rounded-4 shadow-lg float-animation">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
                <div class="stat-card">
                    <div class="stat-number">18</div>
                    <div class="text-muted mt-2">Orphans currently cared for</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-number">100</div>
                    <div class="text-muted mt-2">Goal: Children supported</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-number">10+</div>
                    <div class="text-muted mt-2">Volunteers involved</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-number">6</div>
                    <div class="text-muted mt-2">Focus Areas</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="section-title">Our Mission in Action</h2>
                <p class="lead mt-4">Since 2014, Good Samaritans has been walking alongside refugee and orphaned children, offering them food, shelter, schooling, and spiritual care.</p>
                <p class="mt-3">What began with five children has grown into a community of 18 children in our care, with a God-sized vision to reach 100 children and beyond. Every child in our care is a story of resilience, faith, and hope.</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">What We Do</h2>
            <p class="lead">Comprehensive care for every child's needs</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Provide a loving home</h4>
                    <p>Safe, stable, and faith-filled care for orphaned and vulnerable children.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4>Support education</h4>
                    <p>School fees, uniforms, books, and supplies so children can learn with dignity.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Meet basic needs</h4>
                    <p>Daily meals, clothing, and healthcare support where government assistance is limited.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-church"></i>
                    </div>
                    <h4>Share the gospel</h4>
                    <p>Teaching the word of God and nurturing a strong Christian identity.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Empower communities</h4>
                    <p>Training workshops and seminars to tackle poverty and build resilience.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4>Healthcare support</h4>
                    <p>Medical checkups, treatments, and health education for all children.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Children Gallery</h2>
            <p class="lead">Moments of joy, hope, and transformation</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="gallery-item">
                    <img src="{{ asset('images/Football.jpg') }}" alt="Children playing football">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Joyful Moments</h5>
                        <small>Children enjoying their daily activities</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-item">
                    <img src="{{ asset('images/education.jpg.jpg') }}" alt="Education">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Education Matters</h5>
                        <small>Children in their classroom</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1531844251246-9a1bfaae09fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Community">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Community Life</h5>
                        <small>Building friendships and family bonds</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="zoom-in">
                <div class="testimonial-card">
                    <p class="fs-4 mb-3">"These children expect everything from Good Samaritans because they have no parents and are refugees. But in Christ, they are not forgotten."</p>
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ asset('images/nelson-karageya.jpeg') }}" alt="Bishop Nelson" class="rounded-circle">
                        <div>
                            <h5 class="mb-0">Bishop Nelson Karegeya</h5>
                            <small class="text-muted">Founder, Good Samaritans</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container">
        <div class="bg-gradient rounded-4 p-5 text-center text-white" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));">
            <h2 class="mb-3" data-aos="fade-up">Ready to Make a Difference?</h2>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Every gift, prayer, and act of service helps us move closer to supporting 100 children.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('donate') }}" class="btn btn-light btn-lg text-success fw-bold">
                    <i class="fas fa-gift me-2"></i> Give Today
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg fw-bold">
                    <i class="fas fa-envelope me-2"></i> Contact Our Team
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
