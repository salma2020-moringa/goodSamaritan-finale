@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Donations Management</h1>
</div>

<div class="card">
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Donor</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>{{ $donation->transaction_id }}</td>
                        <td>${{ number_format($donation->amount, 2) }}</td>
                        <td>{{ ucfirst($donation->type) }}</td>
                        <td>{{ $donation->user->name ?? 'Guest' }}</td>
                        <td>
                            <span class="badge bg-{{ $donation->status == 'completed' ? 'success' : 'warning' }}">
                                {{ ucfirst($donation->status) }}
                            </span>
                        </td>
                        <td>{{ $donation->completed_at ? $donation->completed_at->format('M d, Y') : '-' }}</td>
                        <td>
                            <a href="{{ route('admin.donations.show', $donation->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <form action="{{ route('admin.donations.destroy', $donation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No donations found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        {{ $donations->links() }}
    </div>
</div>
@endsection