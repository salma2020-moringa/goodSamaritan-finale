@extends('layouts.app')

@section('title', 'Our Work - Programs for Orphaned Children')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4" style="color: var(--primary-green);">Our Work in Uganda</h1>
            <p class="lead">Practical, faith-rooted programs that meet immediate needs while building long-term hope.</p>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Children's Home" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-3" style="color: var(--primary-green);">Children's Care & Shelter</h2>
                <p>We provide a stable, family-like environment for orphaned and vulnerable children, with accommodation and supervision through trusted caregivers and Christian families.</p>
                <h5 class="mt-4">Planned Children's Home Features:</h5>
                <div class="row mt-3">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Separate dormitories</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Well-equipped kitchen</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Multipurpose hall</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Solar energy system</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Community farm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-5 mt-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2022&q=80" alt="Education" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <h2 class="mb-3" style="color: var(--primary-green);">Education Support</h2>
                <p>We believe education is key to breaking cycles of poverty and vulnerability. We pay school fees, provide uniforms, books, and school supplies, and encourage academic excellence, discipline, and Christian character.</p>
                <div class="mt-4 p-3 bg-light rounded-4">
                    <i class="fas fa-graduation-cap fa-2x float-end text-muted"></i>
                    <h5>Current Focus</h5>
                    <p class="mb-0">Most children are at primary school level, and we aim to continue supporting them through higher levels of education as resources allow.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-5 mt-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1531844251246-9a1bfaae09fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Healthcare" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-3" style="color: var(--primary-green);">Food, Clothing & Healthcare</h2>
                <p>Many children come from situations where even the basics are uncertain. We ensure every child receives regular, nutritious meals, clean clothing, and access to healthcare including medical checkups and treatments.</p>
                <div class="mt-4">
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar" style="width: 85%; background: var(--primary-orange);"></div>
                    </div>
                    <p class="mb-0"><strong>85%</strong> of donations go directly to children's care</p>
                </div>
            </div>
        </div>
        
        <div class="row g-5 mt-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1543353071-10c8ba85a904?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Spiritual Care" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <h2 class="mb-3" style="color: var(--primary-green);">Spiritual Care & Discipleship</h2>
                <p>We integrate faith into all aspects of our work by teaching the word of God, nurturing a personal relationship with Jesus, building each child's Christian identity, and involving local churches in prayer, worship, and mentorship.</p>
                <div class="mt-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-church fa-2x me-3" style="color: var(--primary-orange);"></i>
                        <p class="mb-0">True transformation is both physical and spiritual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Numbers -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div>Meals served monthly</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-number">18</div>
                    <div>Children in full-time care</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div>Children in school</div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div>Care and support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container">
        <div class="text-center p-5 rounded-4" style="background: linear-gradient(135deg, var(--primary-green), var(--primary-orange)); color: white;">
            <h2 class="mb-3">Want to Support Our Work?</h2>
            <p class="lead mb-4">Your support helps us continue these vital programs for orphaned and refugee children.</p>
            <a href="{{ route('get-involved') }}" class="btn btn-light btn-lg text-success fw-bold">
                <i class="fas fa-hands-helping me-2"></i> Get Involved Today
            </a>
        </div>
    </div>
</section>
@endsection