@extends('layouts.app')

@section('title', 'Projects - Mbarara Children\'s Home')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4" style="color: var(--primary-green);">Mbarara Children's Home Project</h1>
            <p class="lead">Building a permanent home for orphaned and refugee children in Uganda</p>
            <div class="mt-4">
                <div class="d-inline-block bg-white rounded-pill px-4 py-2 shadow-sm">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>
                    <span>Mbarara, Uganda</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-calendar-alt text-primary me-2"></i>
                    <span>Est. 2024</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Progress -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="stat-card">
                    <div class="stat-number">18</div>
                    <div>Currently Supported</div>
                    <div class="progress mt-3" style="height: 8px;">
                        <div class="progress-bar" style="width: 18%; background: var(--primary-orange);"></div>
                    </div>
                    <small class="text-muted">Towards 100 goal</small>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-number">$45,000</div>
                    <div>Funds Raised</div>
                    <div class="progress mt-3" style="height: 8px;">
                        <div class="progress-bar" style="width: 45%; background: var(--primary-orange);"></div>
                    </div>
                    <small class="text-muted">Towards $100,000 goal</small>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-number">3</div>
                    <div>Construction Phases</div>
                    <div class="progress mt-3" style="height: 8px;">
                        <div class="progress-bar" style="width: 33%; background: var(--primary-orange);"></div>
                    </div>
                    <small class="text-muted">Phase 1 in progress</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Project with Enhanced Design -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Children's Home Project" 
                         class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-primary-custom px-3 py-2">Phase 1</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4" style="color: var(--primary-green);">Current Project: Mbarara Children's Home</h2>
                <p class="lead">Our main project is the development of a dedicated children's home in Mbarara, Uganda.</p>
                <p>While many children are currently housed with volunteer families, this home will allow us to provide stable, long-term accommodation and create a central hub for all our activities.</p>
                
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <i class="fas fa-home fa-2x me-3" style="color: var(--primary-orange);"></i>
                            <div>
                                <h6 class="mb-0">Stable Accommodation</h6>
                                <small class="text-muted">Long-term housing</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <i class="fas fa-church fa-2x me-3" style="color: var(--primary-orange);"></i>
                            <div>
                                <h6 class="mb-0">Central Location</h6>
                                <small class="text-muted">Worship & counseling</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <i class="fas fa-shield-alt fa-2x me-3" style="color: var(--primary-orange);"></i>
                            <div>
                                <h6 class="mb-0">Safe Environment</h6>
                                <small class="text-muted">Trained caregivers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <i class="fas fa-play fa-2x me-3" style="color: var(--primary-orange);"></i>
                            <div>
                                <h6 class="mb-0">Play & Recreation</h6>
                                <small class="text-muted">Child-friendly spaces</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Features -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Project Features</h2>
            <p class="lead">A comprehensive facility designed for holistic care</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h4>Dormitories</h4>
                    <p>Separate dormitories for boys and girls ensuring comfort, privacy, and safety for all children.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">Capacity: 50 children</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Kitchen & Dining</h4>
                    <p>A well-equipped kitchen where daily, nutritious meals are prepared for all children in care.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">3 meals daily</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-church"></i>
                    </div>
                    <h4>Multipurpose Hall</h4>
                    <p>A versatile space for learning, counseling, worship, and community gatherings.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">200+ capacity</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h4>Solar Energy</h4>
                    <p>Environmentally friendly solar energy system for self-sufficient, sustainable power.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">Green energy</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h4>Community Farm</h4>
                    <p>A farm providing fresh food and teaching valuable agricultural skills to children.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">5 acres</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h4>Clean Water System</h4>
                    <p>Borehole and water purification system ensuring access to clean, safe drinking water.</p>
                    <div class="mt-3">
                        <span class="badge bg-primary-custom">Self-sufficient</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Project Gallery</h2>
            <p class="lead">See the vision coming to life</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="gallery-item">
                    <img src="{{ asset('groundbreaking.jpg') }}" alt="Phase 1: Groundbreaking">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Phase 1: Groundbreaking</h5>
                        <small>January 2024</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1581094288338-1f4aa5a3b2c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Foundation work">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Foundation Complete</h5>
                        <small>March 2024</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2071&q=80" alt="Solar installation">
                    <div class="gallery-overlay">
                        <h5 class="mb-0">Solar Panel Installation</h5>
                        <small>Upcoming</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Future Vision -->
<section class="py-5">
    <div class="container">
        <div class="rounded-4 p-5 text-white" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));">
            <div class="text-center mb-4" data-aos="fade-up">
                <i class="fas fa-eye fa-3x mb-3"></i>
                <h2 class="display-5 fw-bold mb-3">Future Vision: Supporting 100 Children</h2>
                <p class="lead">At present, we are able to host and support 18 children, but the need is far greater.</p>
            </div>
            
            <div class="row text-center g-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-3">
                    <div class="p-3 bg-white bg-opacity-10 rounded-3">
                        <i class="fas fa-utensils fa-3x mb-2"></i>
                        <h5 class="mb-0">Food & Clothing</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 bg-white bg-opacity-10 rounded-3">
                        <i class="fas fa-hospital-user fa-3x mb-2"></i>
                        <h5 class="mb-0">Healthcare</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 bg-white bg-opacity-10 rounded-3">
                        <i class="fas fa-book fa-3x mb-2"></i>
                        <h5 class="mb-0">Education</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 bg-white bg-opacity-10 rounded-3">
                        <i class="fas fa-church fa-3x mb-2"></i>
                        <h5 class="mb-0">Spiritual Support</h5>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4" data-aos="fade-up">
                <p class="fs-5 mb-0">Every partnership, gift, and prayer moves us closer to this goal.</p>
                <div class="mt-4">
                    <div class="d-inline-block bg-white rounded-pill px-4 py-2">
                        <span class="text-success fw-bold">Current: 18 children</span>
                        <i class="fas fa-arrow-right mx-3 text-white"></i>
                        <span class="text-success fw-bold">Goal: 100 children</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How You Can Help -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">How You Can Help Our Projects</h2>
            <p class="lead">Your support makes this vision a reality</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-child"></i>
                    </div>
                    <h5>Sponsor a Child</h5>
                    <p>Support a child's education and basic needs for just $50/month</p>
                    <a href="{{ route('children.index') }}" class="btn btn-primary-custom btn-sm mt-2">Learn More</a>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5>Construction Support</h5>
                    <p>Contribute to building the children's home and facilities</p>
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom btn-sm mt-2">Donate Now</a>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h5>Solar & Farm</h5>
                    <p>Support sustainability initiatives for long-term self-sufficiency</p>
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom btn-sm mt-2">Support</a>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-church"></i>
                    </div>
                    <h5>Church Partnership</h5>
                    <p>Partner as a church or organization to make a lasting impact</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary-custom btn-sm mt-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donation Options -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary-custom rounded-circle p-3 me-3">
                            <i class="fas fa-hand-holding-usd fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">One-Time Gift</h3>
                    </div>
                    <p>Make a one-time donation to support our current projects and immediate needs.</p>
                    <div class="row g-2 mt-3">
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="50">$50</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="100">$100</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="250">$250</button>
                        </div>
                    </div>
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom w-100 mt-3">Give Now</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary-custom rounded-circle p-3 me-3">
                            <i class="fas fa-calendar-alt fa-2x text-white"></i>
                        </div>
                        <h3 class="mb-0">Monthly Partner</h3>
                    </div>
                    <p>Join our monthly giving program to provide sustainable, ongoing support for the children's home.</p>
                    <div class="row g-2 mt-3">
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="25">$25/mo</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="50">$50/mo</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-custom w-100 donation-amount" data-amount="100">$100/mo</button>
                        </div>
                    </div>
                    <a href="{{ route('donate') }}" class="btn btn-primary-custom w-100 mt-3">Become a Partner</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="lead">Find answers to common questions about our projects</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up">
                        <h2 class="accordion-header">
                            <button class="accordion-button bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-map-marker-alt me-3 text-primary-custom"></i>
                                <strong>Where are the children located?</strong>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                Most of the children we support are in and around Mbarara, Uganda, many from refugee families originating from the Democratic Republic of Congo. The new children's home will be built in Mbarara district.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-child me-3 text-primary-custom"></i>
                                <strong>How many children do you currently support?</strong>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                We currently host and support 18 children, with a vision and plan to increase our capacity to 100 children through the new children's home as resources allow.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fas fa-file-alt me-3 text-primary-custom"></i>
                                <strong>Is Good Samaritans a registered nonprofit?</strong>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                Good Samaritans operates as a Christian, nonprofit organization working under the umbrella of the Vision of Jesus Pentecostal ministry and supported by networks in Canada and the USA. Tax receipts are available for donations.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-hands-helping me-3 text-primary-custom"></i>
                                <strong>How can I volunteer?</strong>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                You can volunteer by helping with outreach, fundraising, or sharing our mission in your church or community. Contact our leaders in Canada or the USA to discuss current opportunities. Visit our <a href="{{ route('get-involved') }}">Get Involved</a> page for more information.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="fas fa-gift me-3 text-primary-custom"></i>
                                <strong>How do I give?</strong>
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                You can give through our <a href="{{ route('donate') }}">Donate page</a>, by bank transfer, cheque, or other methods listed there. Monthly giving options are available for ongoing support. For specific instructions, please contact us directly.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                <i class="fas fa-chart-line me-3 text-primary-custom"></i>
                                <strong>How are funds used?</strong>
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body bg-light">
                                85% of all donations go directly to children's care and project development. 15% covers administrative and operational costs. We are committed to transparency and stewardship. Detailed financial reports are available upon request.
                            </div>
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
        <div class="text-center p-5 rounded-4" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-orange)); color: white;">
            <i class="fas fa-envelope-open-text fa-3x mb-3"></i>
            <h2 class="display-6 mb-3">Want to Learn More?</h2>
            <p class="lead mb-4">Contact us for more information about our projects or to schedule a visit</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg text-success fw-bold">
                    <i class="fas fa-envelope me-2"></i> Contact Us
                </a>
                <a href="{{ route('donate') }}" class="btn btn-outline-light btn-lg fw-bold">
                    <i class="fas fa-heart me-2"></i> Support Our Vision
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Add donation amount selection
    document.querySelectorAll('.donation-amount').forEach(button => {
        button.addEventListener('click', function() {
            const amount = this.getAttribute('data-amount');
            // You can add logic to redirect with amount
            const donateUrl = "{{ route('donate') }}?amount=" + amount;
            window.location.href = donateUrl;
        });
    });
</script>
@endpush
@endsection
