@extends('admin.layout.master')

@section('container')
<div class="container-fluid mt-5 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Instructors</h2>
        <a href="{{ route('admin.instructor.create') }}" class="btn btn-primary shadow-sm">Add New</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle w-100 mb-0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Post</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($instructors as $instructor)
                            <tr>
                                <td>{{ $instructor->name }}</td>
                                <td>
                                    <img src="{{ $instructor->image }}" alt="Image" class="img-thumbnail rounded" style="height: 80px; width: 80px; object-fit: cover;">
                                </td>
                                <td>{{ $instructor->post }}</td>
                                <td>{{ $instructor->contact_number }}</td>
                                <td>{{ Str::limit($instructor->address, 30) }}</td>
                                <td>{{ $instructor->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.instructor.edit', $instructor) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.instructor.destroy', $instructor) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this instructor?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">No instructors found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
