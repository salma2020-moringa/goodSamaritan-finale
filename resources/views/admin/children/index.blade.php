@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Children Management</h1>
    <a href="{{ route('admin.children.create') }}" class="btn btn-primary-custom">
        <i class="fas fa-plus me-2"></i> Add New Child
    </a>
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
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($children as $child)
                    <tr>
                        <td>{{ $child->id }}</td>
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->age }}</td>
                        <td>{{ ucfirst($child->gender) }}</td>
                        <td>
                            <span class="badge bg-{{ $child->status == 'active' ? 'success' : 'secondary' }}">
                                {{ ucfirst($child->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.children.edit', $child->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.children.destroy', $child->id) }}" method="POST" class="d-inline">
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
                        <td colspan="6" class="text-center">No children found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        {{ $children->links() }}
    </div>
</div>
@endsection