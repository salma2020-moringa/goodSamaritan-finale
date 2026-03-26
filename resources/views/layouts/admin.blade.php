<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - {{ config('app.name') }}</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #2c5f2d;
            --primary-orange: #c17b3c;
            --sidebar-width: 280px;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        
        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: linear-gradient(135deg, #1a2c1a, #0e1a0e);
            color: white;
            transition: all 0.3s;
            z-index: 1000;
            overflow-y: auto;
        }
        
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }
        
        .sidebar-header p {
            font-size: 0.75rem;
            opacity: 0.7;
            margin: 0;
        }
        
        .sidebar-nav {
            padding: 1rem 0;
        }
        
        .sidebar-nav .nav-item {
            margin-bottom: 0.25rem;
        }
        
        .sidebar-nav .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 0.75rem 1.5rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .sidebar-nav .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        
        .sidebar-nav .nav-link.active {
            background: var(--primary-orange);
            color: white;
        }
        
        .sidebar-nav .nav-link i {
            width: 24px;
            font-size: 1.1rem;
        }
        
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }
        
        .top-navbar {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }
        
        .content-wrapper {
            padding: 2rem;
        }
        
        /* Cards */
        .stat-card {
            border: none;
            border-radius: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .stat-card .card-body {
            padding: 1.5rem;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar-toggle {
                display: block;
            }
        }
        
        @media (min-width: 769px) {
            .sidebar-toggle {
                display: none;
            }
        }
        
        /* Table Styles */
        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .table-custom thead {
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            color: white;
        }
        
        .table-custom th {
            border: none;
            padding: 1rem;
        }
        
        .table-custom td {
            padding: 1rem;
            vertical-align: middle;
        }
        
        /* Chart Container */
        .chart-container {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        /* Badge Styles */
        .badge-success {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
        }
        
        .badge-warning {
            background: #ffc107;
            color: #000;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
        }
        
        .badge-danger {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out;
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-hand-holding-heart me-2"></i> Good Samaritans</h3>
            <p>Admin Dashboard</p>
        </div>
        
        <div class="sidebar-nav">
            <div class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.children.index') }}" class="nav-link {{ request()->routeIs('admin.children.*') ? 'active' : '' }}">
                    <i class="fas fa-child"></i>
                    <span>Children</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.donations.index') }}" class="nav-link {{ request()->routeIs('admin.donations.*') ? 'active' : '' }}">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>Donations</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.sponsorships.index') }}" class="nav-link {{ request()->routeIs('admin.sponsorships.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span>Sponsorships</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.volunteers.index') }}" class="nav-link {{ request()->routeIs('admin.volunteers.*') ? 'active' : '' }}">
                    <i class="fas fa-hands-helping"></i>
                    <span>Volunteers</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-users-cog"></i>
                    <span>Users</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('admin.content') }}" class="nav-link {{ request()->routeIs('admin.content') ? 'active' : '' }}">
                    <i class="fas fa-edit"></i>
                    <span>Content</span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="top-navbar">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn btn-link sidebar-toggle" id="sidebarToggle">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle fa-lg me-2"></i>
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user me-2"></i> Profile
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="content-wrapper">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            @yield('content')
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sidebar toggle for mobile
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
        
        // Auto-hide alerts
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
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