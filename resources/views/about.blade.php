@extends('layouts.app')

@section('title', 'About Us - Good Samaritans')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4" style="color: var(--primary-green);">About Good Samaritans</h1>
                <p class="lead">Christian nonprofit serving orphaned and refugee children in Mbarara, Uganda</p>
                <p>Good Samaritans is a Christian, nonprofit organization dedicated to caring for orphaned and vulnerable children, especially children from the Democratic Republic of Congo who are living as refugees in Uganda.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('images/about good samaritans.jpg') }}" alt="About Good Samaritans" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Story</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="History" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <p class="lead">Good Samaritans was founded in 2014 by Bishop Nelson Karegeya in Mbarara, Uganda, under the umbrella of the Vision of Jesus Pentecostal Church.</p>
                <p>The ministry started small—with just five orphans supported through the sacrificial giving of local church members. Over time, as more children in need came to their doors, Good Samaritans grew to host and support 18 orphans, most of them at primary school age.</p>
                <p>Today, Bishop Karegeya is based in Canada, continuing to lead and mobilize support through Christian communities in Ottawa, Ontario and Montreal, Quebec, while the core work with children continues in Mbarara, Uganda.</p>
                <div class="mt-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-calendar-alt fa-2x me-3" style="color: var(--primary-orange);"></i>
                        <div>
                            <h5 class="mb-0">Founded in 2014</h5>
                            <small>Over a decade of faithful service</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Values</h2>
            <p class="lead">The principles that guide our mission</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cross"></i>
                    </div>
                    <h4>Faith in Jesus</h4>
                    <p>Christ is at the center of everything we do.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Love and dignity</h4>
                    <p>Every child is seen, known, and valued.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4>Holistic care</h4>
                    <p>We care for body, mind, and spirit.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Integrity</h4>
                    <p>We steward resources transparently and responsibly.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Community empowerment</h4>
                    <p>We work with families, churches, and local leaders.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right">
                <div class="p-4 bg-white rounded-4 shadow h-100">
                    <i class="fas fa-eye fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h3 style="color: var(--primary-green);">Our Vision</h3>
                    <p class="lead">To see orphans from different families become educated, skilled, and inspired by faith and hope, growing into a transformational force in their communities.</p>
                    <p>We envision a future where children once abandoned or displaced are now leaders, peacemakers, and servant-hearted Christians shaping their societies.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="p-4 bg-white rounded-4 shadow h-100">
                    <i class="fas fa-bullseye fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h3 style="color: var(--primary-green);">Our Mission</h3>
                    <p class="lead">To provide orphaned and vulnerable children with:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Quality education</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Safe shelter and a loving home</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Food and basic life essentials</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Healthcare</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Spiritual discipleship</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Leadership Team</h2>
            <p class="lead">Dedicated leaders serving with passion and integrity</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="team-card">
                    <div class="team-image">
                        <img src="{{ asset('images/nelson-karageya.jpeg') }}" alt="Bishop Nelson">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4>Bishop Nelson Karegeya</h4>
                        <p class="text-muted">President & Founder</p>
                        <p><i class="fas fa-phone me-2"></i> (613) 793-5646</p>
                        <p><i class="fas fa-envelope me-2"></i> nelson@goodsamaritans.org</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card">
                    <div class="team-image">
                        <img src="{{ asset('images/nelson-karageya.jpeg') }}" alt="Edwards Barbarzar">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4>Pastor Edwards Barbarzar</h4>
                        <p class="text-muted">Director - Canada</p>
                        <p><i class="fas fa-phone me-2"></i> (819) 319-6435</p>
                        <p><i class="fas fa-envelope me-2"></i> edwards@goodsamaritans.org</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <div class="team-image">
                        <img src="{{ asset('images/julius.jpeg') }}" alt="Julius Irakoze">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4>Julius Irakoze</h4>
                        <p class="text-muted">Director - USA</p>
                        <p><i class="fas fa-envelope me-2"></i> juliusirakoze@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
