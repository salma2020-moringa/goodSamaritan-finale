@extends('layouts.app')

@section('title', 'Our Children - Meet the Children in Our Care')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-4" style="color: var(--primary-green);">Meet Our Children</h1>
            <p class="lead mb-3">Each child has a unique story and dreams for the future. Your support can help make those dreams come true.</p>
            <div class="mt-4">
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <div class="bg-white rounded-pill px-4 py-2 shadow-sm">
                        <i class="fas fa-child text-primary-custom me-2"></i>
                        <span class="fw-bold">{{ $children->total() }}</span> Children in Our Care
                    </div>
                    <div class="bg-white rounded-pill px-4 py-2 shadow-sm">
                        <i class="fas fa-heart text-danger me-2"></i>
                        <span class="fw-bold">{{ $children->where('is_sponsored', true)->count() }}</span> Sponsored
                    </div>
                    <div class="bg-white rounded-pill px-4 py-2 shadow-sm">
                        <i class="fas fa-hands-helping text-primary-custom me-2"></i>
                        <span class="fw-bold">{{ $children->where('is_sponsored', false)->count() }}</span> Need Sponsors
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-3">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-8">
                <div class="d-flex gap-2 flex-wrap">
                    <button class="btn btn-filter active" data-filter="all">
                        <i class="fas fa-users me-1"></i> All Children
                    </button>
                    <button class="btn btn-filter" data-filter="sponsored">
                        <i class="fas fa-heart me-1"></i> Sponsored
                    </button>
                    <button class="btn btn-filter" data-filter="unsponsored">
                        <i class="fas fa-hands-helping me-1"></i> Need Sponsors
                    </button>
                    <button class="btn btn-filter" data-filter="boys">
                        <i class="fas fa-male me-1"></i> Boys
                    </button>
                    <button class="btn btn-filter" data-filter="girls">
                        <i class="fas fa-female me-1"></i> Girls
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" id="searchChildren" placeholder="Search by name...">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Children Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4" id="childrenGrid">
            @foreach($children as $child)
            <div class="col-lg-4 col-md-6 child-card" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ $loop->index * 100 }}"
                 data-sponsor-status="{{ $child->is_sponsored ? 'sponsored' : 'unsponsored' }}"
                 data-gender="{{ $child->gender }}"
                 data-name="{{ strtolower($child->name) }}">
                <div class="team-card h-100">
                    <div class="team-image position-relative">
                        @if($child->photo)
                            <img src="{{ Storage::url($child->photo) }}" alt="{{ $child->name }}">
                        @else
                            <img src="https://images.unsplash.com/photo-1531844251246-9a1bfaae09fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="{{ $child->name }}">
                        @endif
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge {{ $child->is_sponsored ? 'bg-success' : 'bg-warning text-dark' }} px-3 py-2">
                                <i class="fas {{ $child->is_sponsored ? 'fa-heart' : 'fa-hands-helping' }} me-1"></i>
                                {{ $child->is_sponsored ? 'Sponsored' : 'Needs Sponsor' }}
                            </span>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light btn-sm rounded-circle quick-view" data-child-id="{{ $child->id }}" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="team-social">
                            <a href="{{ route('children.show', $child->id) }}" class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-user-graduate me-1"></i> View Profile
                            </a>
                            @if(!$child->is_sponsored)
                            <a href="{{ route('children.show', $child->id) }}#sponsor" class="btn btn-light btn-sm ms-2">
                                <i class="fas fa-heart me-1 text-danger"></i> Sponsor
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h4 mb-0">{{ $child->name }}</h3>
                            <span class="badge bg-light text-dark">
                                <i class="fas {{ $child->gender == 'male' ? 'fa-male' : 'fa-female' }} me-1"></i>
                                {{ ucfirst($child->gender) }}
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-birthday-cake text-muted me-2"></i>
                            <span class="text-muted">{{ $child->age }} years old</span>
                            <span class="mx-2 text-muted">•</span>
                            <i class="fas fa-calendar-alt text-muted me-2"></i>
                            <span class="text-muted">Since {{ \Carbon\Carbon::parse($child->admission_date)->format('Y') }}</span>
                        </div>
                        
                        <!-- Story Preview -->
                        <div class="mb-3">
                            <p class="text-muted mb-2">
                                <i class="fas fa-quote-left me-1 text-primary-custom"></i>
                                {{ Str::limit($child->background_story ?? 'This child is waiting for a sponsor to help provide education, food, and care.', 80) }}
                            </p>
                        </div>
                        
                        <!-- Education Info -->
                        <div class="bg-light rounded-3 p-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-graduation-cap text-primary-custom me-2"></i>
                                    <span class="fw-bold">Education:</span>
                                </div>
                                <span>{{ $child->education_level ?? 'Primary School' }}</span>
                            </div>
                            @if($child->education_level)
                            <div class="progress mt-2" style="height: 4px;">
                                @php
                                    $gradeLevel = preg_replace('/[^0-9]/', '', $child->education_level);
                                    $progress = $gradeLevel ? ($gradeLevel / 12) * 100 : 50;
                                @endphp
                                <div class="progress-bar" style="width: {{ $progress }}%; background: var(--primary-orange);"></div>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Quick Stats -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <div class="text-center p-2 bg-light rounded-3">
                                    <i class="fas fa-utensils text-primary-custom"></i>
                                    <small class="d-block">Daily Meals</small>
                                    <strong>3</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center p-2 bg-light rounded-3">
                                    <i class="fas fa-book text-primary-custom"></i>
                                    <small class="d-block">Subjects</small>
                                    <strong>8+</strong>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <a href="{{ route('children.show', $child->id) }}" class="btn btn-primary-custom flex-grow-1">
                                <i class="fas fa-user-circle me-1"></i> View Full Story
                            </a>
                            @if(!$child->is_sponsored)
                            <a href="{{ route('children.show', $child->id) }}#sponsor" class="btn btn-outline-custom">
                                <i class="fas fa-heart"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-5">
            {{ $children->links() }}
        </div>
        
        <!-- No Results Message -->
        <div id="noResults" class="text-center py-5 d-none">
            <i class="fas fa-child fa-4x text-muted mb-3"></i>
            <h3>No children found</h3>
            <p class="text-muted">Try adjusting your search or filter criteria</p>
            <button class="btn btn-primary-custom" id="clearFilters">
                <i class="fas fa-redo me-1"></i> Clear Filters
            </button>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="mb-3" style="color: var(--primary-green);">Can't Decide Who to Sponsor?</h2>
                <p class="lead">Every child deserves love, care, and a chance to thrive.</p>
                <p>When you sponsor a child through Good Samaritans, you provide not just education and basic needs, but also hope, love, and the knowledge that someone in the world cares about them.</p>
                <div class="mt-4">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                                <div>
                                    <strong>Monthly Updates</strong><br>
                                    <small>Receive photos and letters</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                                <div>
                                    <strong>Direct Impact</strong><br>
                                    <small>See your sponsorship make a difference</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="bg-white rounded-4 p-4 shadow-lg text-center">
                    <i class="fas fa-question-circle fa-3x mb-3" style="color: var(--primary-orange);"></i>
                    <h4>Let Us Help You Choose</h4>
                    <p>Contact us and we'll help match you with a child who needs your support.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary-custom">
                        <i class="fas fa-envelope me-2"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick View Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-0">
                <div id="quickViewContent">
                    <!-- Dynamic content loaded via JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .btn-filter {
        background: white;
        border: 1px solid #dee2e6;
        padding: 8px 20px;
        border-radius: 50px;
        transition: all 0.3s;
        color: var(--text-dark);
    }
    
    .btn-filter:hover,
    .btn-filter.active {
        background: var(--primary-orange);
        border-color: var(--primary-orange);
        color: white;
    }
    
    .team-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .quick-view {
        opacity: 0;
        transition: opacity 0.3s;
        background: white;
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .team-card:hover .quick-view {
        opacity: 1;
    }
    
    .pagination {
        justify-content: center;
    }
    
    .pagination .page-item.active .page-link {
        background: var(--primary-orange);
        border-color: var(--primary-orange);
    }
    
    .pagination .page-link {
        color: var(--primary-orange);
    }
    
    .progress {
        background-color: #e9ecef;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .progress-bar {
        background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
        border-radius: 10px;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .child-card {
        animation: fadeIn 0.5s ease-out;
    }
</style>
@endpush

@push('scripts')
<script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.btn-filter');
        const searchInput = document.getElementById('searchChildren');
        const childrenGrid = document.getElementById('childrenGrid');
        const noResults = document.getElementById('noResults');
        let activeFilter = 'all';
        let searchTerm = '';
        
        function filterChildren() {
            const cards = document.querySelectorAll('.child-card');
            let visibleCount = 0;
            
            cards.forEach(card => {
                const sponsorStatus = card.dataset.sponsorStatus;
                const gender = card.dataset.gender;
                const name = card.dataset.name;
                
                let matchesFilter = false;
                let matchesSearch = true;
                
                // Filter logic
                if (activeFilter === 'all') {
                    matchesFilter = true;
                } else if (activeFilter === 'sponsored') {
                    matchesFilter = sponsorStatus === 'sponsored';
                } else if (activeFilter === 'unsponsored') {
                    matchesFilter = sponsorStatus === 'unsponsored';
                } else if (activeFilter === 'boys') {
                    matchesFilter = gender === 'male';
                } else if (activeFilter === 'girls') {
                    matchesFilter = gender === 'female';
                }
                
                // Search logic
                if (searchTerm) {
                    matchesSearch = name.includes(searchTerm.toLowerCase());
                }
                
                if (matchesFilter && matchesSearch) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }
        }
        
        // Filter button click handlers
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                activeFilter = this.dataset.filter;
                filterChildren();
            });
        });
        
        // Search input handler
        searchInput.addEventListener('input', function(e) {
            searchTerm = e.target.value;
            filterChildren();
        });
        
        // Clear filters button
        const clearFiltersBtn = document.getElementById('clearFilters');
        if (clearFiltersBtn) {
            clearFiltersBtn.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelector('.btn-filter[data-filter="all"]').classList.add('active');
                activeFilter = 'all';
                searchInput.value = '';
                searchTerm = '';
                filterChildren();
            });
        }
        
        // Quick view modal
        const quickViewBtns = document.querySelectorAll('.quick-view');
        const quickViewContent = document.getElementById('quickViewContent');
        
        quickViewBtns.forEach(btn => {
            btn.addEventListener('click', async function() {
                const childId = this.dataset.childId;
                // You can fetch child data via AJAX here
                // For demo, showing a placeholder
                quickViewContent.innerHTML = `
                    <div class="p-4 text-center">
                        <div class="spinner-border text-primary-custom" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="mt-3">Loading child information...</p>
                    </div>
                `;
                
                // Simulate loading - replace with actual AJAX call
                setTimeout(() => {
                    quickViewContent.innerHTML = `
                        <div class="p-4">
                            <div class="text-center">
                                <img src="https://images.unsplash.com/photo-1531844251246-9a1bfaae09fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                                     class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover;">
                                <h3>Child Name</h3>
                                <p class="text-muted">8 years • Male</p>
                            </div>
                            <p class="mt-3">This child is full of dreams and potential. With your support, they can achieve great things.</p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary-custom w-100">View Full Profile</a>
                            </div>
                        </div>
                    `;
                }, 500);
            });
        });
    });
</script>
@endpush
@endsection