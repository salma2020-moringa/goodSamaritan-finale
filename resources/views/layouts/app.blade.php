<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Good Samaritans - Christian Orphan Care in Uganda')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #2c5f2d;
            --primary-orange: #c17b3c;
            --light-bg: #fefcf7;
            --dark-green: #1e3a1e;
            --text-dark: #1e2a2f;
            --text-light: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-orange);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-green);
        }
        
        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }
        
        .navbar.scrolled {
            padding: 0.7rem 0;
            background: white;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 1.8rem;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: transform 0.3s;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
        }
        
        .nav-link {
            font-weight: 600;
            color: var(--text-dark) !important;
            position: relative;
            transition: color 0.3s;
            margin: 0 0.5rem;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-orange);
            transition: all 0.3s;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-orange) !important;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-orange), #a4622c);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(193, 123, 60, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(193, 123, 60, 0.4);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-orange);
            background: transparent;
            padding: 10px 28px;
            border-radius: 50px;
            color: var(--primary-orange);
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-outline-custom:hover {
            background: var(--primary-orange);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(44, 95, 45, 0.05), rgba(193, 123, 60, 0.05));
            overflow: hidden;
        }
        
        .hero-bg-shape {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
            opacity: 0.15;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.2;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
        }
        
        /* Cards */
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            transform: translateX(-100%);
            transition: transform 0.4s;
        }
        
        .service-card:hover::before {
            transform: translateX(0);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, rgba(44, 95, 45, 0.1), rgba(193, 123, 60, 0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--primary-orange);
            transition: all 0.3s;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.1);
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            color: white;
        }
        
        /* Stat Cards */
        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-orange), var(--primary-green));
            transform: scaleX(0);
            transition: transform 0.3s;
        }
        
        .stat-card:hover::after {
            transform: scaleX(1);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
        }
        
        /* Team Cards */
        .team-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .team-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        
        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .team-card:hover .team-image img {
            transform: scale(1.1);
        }
        
        .team-social {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            padding: 1rem;
            transition: bottom 0.3s;
            text-align: center;
        }
        
        .team-card:hover .team-social {
            bottom: 0;
        }
        
        .team-social a {
            color: white;
            margin: 0 0.5rem;
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        
        .team-social a:hover {
            color: var(--primary-orange);
        }
        
        /* Testimonial */
        .testimonial-card {
            background: white;
            border-radius: 30px;
            padding: 3rem;
            position: relative;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 8rem;
            color: var(--primary-orange);
            opacity: 0.2;
            font-family: serif;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #1a2c1a, #0e1a0e);
            color: #d4e2d0;
            padding: 4rem 0 1rem;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-orange), var(--primary-green));
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Section Titles */
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            border-radius: 3px;
        }
        
        /* Image Gallery */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            cursor: pointer;
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(44, 95, 45, 0.9), transparent);
            color: white;
            padding: 1rem;
            transition: bottom 0.3s;
        }
        
        .gallery-item:hover .gallery-overlay {
            bottom: 0;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-hand-holding-heart me-2"></i>
                Good Samaritans
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('our-work') ? 'active' : '' }}" href="{{ route('our-work') }}">Our Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('children.index') ? 'active' : '' }}" href="{{ route('children.index') }}">Children</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('get-involved') ? 'active' : '' }}" href="{{ route('get-involved') }}">Get Involved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @auth
                        @if(auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle"></i> {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary-custom ms-2" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-custom ms-2" href="{{ route('register') }}">
                                <i class="fas fa-user-plus me-1"></i> Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-floating alert-dismissible fade show" role="alert" style="position: fixed; top: 80px; right: 20px; z-index: 9999; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger alert-floating alert-dismissible fade show" role="alert" style="position: fixed; top: 80px; right: 20px; z-index: 9999; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="mb-3" style="font-family: 'Playfair Display', serif;">Good Samaritans</h4>
                    <p>Where we value people, one child at a time. Rooted in Mbarara, Uganda, supported by partners in Canada and USA.</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('our-work') }}" class="text-white-50 text-decoration-none">Our Work</a></li>
                        <li class="mb-2"><a href="{{ route('children.index') }}" class="text-white-50 text-decoration-none">Children</a></li>
                        <li class="mb-2"><a href="{{ route('donate') }}" class="text-white-50 text-decoration-none">Donate</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">Contact Info</h5>
                    <p><i class="fas fa-phone me-2"></i> Bishop Nelson: (613) 793-5646</p>
                    <p><i class="fas fa-envelope me-2"></i> info@goodsamaritans.org</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Mbarara, Uganda</p>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-3">Newsletter</h5>
                    <p>Subscribe to receive updates about our children and ministry.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-primary-custom" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="mt-3 mb-3" style="border-color: #3a553a;">
            <p class="text-center mb-0">&copy; 2025 Good Samaritans. All rights reserved. Designed with <i class="fas fa-heart text-danger"></i> for the children of Uganda.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Auto-hide flash messages
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert-floating');
            alerts.forEach(function(alert) {
                alert.style.transition = 'opacity 0.5s';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.remove();
                }, 500);
            });
        }, 5000);
    </script>
    @stack('scripts')
</body>
</html>