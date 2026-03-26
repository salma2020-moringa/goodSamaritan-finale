@extends('layouts.admin')

@section('content')
<div class="animate-fadeInUp">
    <!-- Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-4">
        <div>
            <h1 class="h2">Welcome back, {{ Auth::user()->name }}!</h1>
            <p class="text-muted">Here's what's happening with your ministry today.</p>
        </div>
        <div>
            <a href="{{ route('admin.children.create') }}" class="btn btn-primary-custom">
                <i class="fas fa-plus me-2"></i> Add New Child
            </a>
        </div>
    </div>
    
    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-title text-white-50 mb-2">Total Children</h6>
                            <h2 class="mb-0">{{ $stats['total_children'] ?? 0 }}</h2>
                            <small class="text-white-50">Active: {{ $stats['active_children'] ?? 0 }}</small>
                        </div>
                        <div class="stat-icon bg-white bg-opacity-25">
                            <i class="fas fa-child"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-title text-white-50 mb-2">Total Donations</h6>
                            <h2 class="mb-0">${{ number_format($stats['total_donations'] ?? 0, 2) }}</h2>
                            <small class="text-white-50">This month: ${{ number_format($stats['monthly_donations'] ?? 0, 2) }}</small>
                        </div>
                        <div class="stat-icon bg-white bg-opacity-25">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-title text-white-50 mb-2">Active Sponsors</h6>
                            <h2 class="mb-0">{{ $stats['total_sponsors'] ?? 0 }}</h2>
                            <small class="text-white-50">Supporting children monthly</small>
                        </div>
                        <div class="stat-icon bg-white bg-opacity-25">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
            <div class="card stat-card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-title text-white-50 mb-2">Volunteers</h6>
                            <h2 class="mb-0">{{ $stats['total_volunteers'] ?? 0 }}</h2>
                            <small class="text-white-50">Active volunteers</small>
                        </div>
                        <div class="stat-icon bg-white bg-opacity-25">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Charts and Recent Activity -->
    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="chart-container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Donation Trends (This Month)</h5>
                    <select class="form-select form-select-sm w-auto" id="chartPeriod">
                        <option value="week">Last 7 Days</option>
                        <option value="month" selected>This Month</option>
                        <option value="year">This Year</option>
                    </select>
                </div>
                <canvas id="donationChart" height="300"></canvas>
                @if(empty($stats['chart_labels']) || count($stats['chart_labels']) == 0)
                    <div class="text-center text-muted py-4">
                        <i class="fas fa-chart-line fa-3x mb-2"></i>
                        <p>No donation data available for this month yet.</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="chart-container h-100">
                <h5 class="mb-3">Recent Donations</h5>
                <div class="list-group list-group-flush">
                    @forelse($stats['recent_donations'] as $donation)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong class="d-block">${{ number_format($donation->amount, 2) }}</strong>
                                <small class="text-muted">{{ $donation->user->name ?? 'Guest' }}</small>
                            </div>
                            <div class="text-end">
                                <span class="badge {{ $donation->type == 'monthly' ? 'bg-info' : 'bg-success' }}">
                                    {{ $donation->type == 'monthly' ? 'Monthly' : 'One-time' }}
                                </span>
                                <small class="d-block text-muted">{{ $donation->completed_at ? $donation->completed_at->diffForHumans() : 'Pending' }}</small>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-4">
                            <i class="fas fa-heart fa-3x text-muted mb-2"></i>
                            <p class="text-muted mb-0">No recent donations</p>
                        </div>
                    @endforelse
                </div>
                <div class="mt-3 text-center">
                    <a href="{{ route('admin.donations.index') }}" class="btn btn-sm btn-outline-primary-custom">
                        View All Donations <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Sponsorships and New Users -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="chart-container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Recent Sponsorships</h5>
                    <a href="{{ route('admin.sponsorships.index') }}" class="btn btn-sm btn-link">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-custom">
                        <thead>
                             <tr>
                                <th>Sponsor</th>
                                <th>Child</th>
                                <th>Amount</th>
                                <th>Date</th>
                             </tr>
                        </thead>
                        <tbody>
                            @forelse($stats['recent_sponsorships'] as $sponsorship)
                                <tr>
                                    <td>{{ $sponsorship->user->name ?? 'N/A' }}</td>
                                    <td>{{ $sponsorship->child->name ?? 'N/A' }}</td>
                                    <td>${{ number_format($sponsorship->monthly_amount, 2) }}/mo</td>
                                    <td>{{ $sponsorship->created_at->format('M d, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">
                                        <i class="fas fa-users fa-2x text-muted mb-2 d-block"></i>
                                        No sponsorships yet
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="chart-container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">New Users</h5>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-link">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-custom">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($stats['recent_users'] as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-user text-muted"></i>
                                            </div>
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge {{ $user->role == 'admin' ? 'bg-danger' : ($user->role == 'sponsor' ? 'bg-success' : 'bg-info') }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">
                                        <i class="fas fa-user-plus fa-2x text-muted mb-2 d-block"></i>
                                        No users registered yet
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="chart-container">
                <h5 class="mb-3">Quick Actions</h5>
                <div class="row g-3">
                    <div class="col-md-3 col-6">
                        <a href="{{ route('admin.children.create') }}" class="text-decoration-none">
                            <div class="text-center p-3 border rounded-3 hover-shadow">
                                <i class="fas fa-plus-circle fa-2x text-primary mb-2"></i>
                                <div class="small">Add Child</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('admin.donations.index') }}" class="text-decoration-none">
                            <div class="text-center p-3 border rounded-3 hover-shadow">
                                <i class="fas fa-chart-line fa-2x text-success mb-2"></i>
                                <div class="small">View Reports</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('admin.volunteers.index') }}" class="text-decoration-none">
                            <div class="text-center p-3 border rounded-3 hover-shadow">
                                <i class="fas fa-user-plus fa-2x text-info mb-2"></i>
                                <div class="small">Add Volunteer</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('admin.content') }}" class="text-decoration-none">
                            <div class="text-center p-3 border rounded-3 hover-shadow">
                                <i class="fas fa-edit fa-2x text-warning mb-2"></i>
                                <div class="small">Edit Content</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .hover-shadow {
        transition: all 0.3s;
        background: white;
        cursor: pointer;
    }
    
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .btn-outline-primary-custom {
        border: 2px solid var(--primary-orange);
        color: var(--primary-orange);
        background: transparent;
        transition: all 0.3s;
    }
    
    .btn-outline-primary-custom:hover {
        background: var(--primary-orange);
        color: white;
    }
    
    .table-custom {
        background: transparent;
    }
    
    .table-custom thead th {
        background: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
        font-weight: 600;
        color: #495057;
    }
    
    .table-custom tbody tr:hover {
        background: #f8f9fa;
    }
    
    .stat-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    
    .chart-container {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
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
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Donation Chart
    @if(!empty($stats['chart_labels']) && count($stats['chart_labels']) > 0)
    const ctx = document.getElementById('donationChart');
    if (ctx) {
        const donationChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($stats['chart_labels']) !!},
                datasets: [{
                    label: 'Donations ($)',
                    data: {!! json_encode($stats['chart_data']) !!},
                    borderColor: 'rgb(193, 123, 60)',
                    backgroundColor: 'rgba(193, 123, 60, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: 'rgb(44, 95, 45)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return '$' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    }
    @endif
    
    // Chart period change
    document.getElementById('chartPeriod')?.addEventListener('change', function() {
        // You can implement AJAX to fetch data for different periods
        window.location.href = '{{ route("admin.dashboard") }}?period=' + this.value;
    });
</script>
@endpush
@endsection