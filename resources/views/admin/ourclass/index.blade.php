@extends('admin.layout.master')

@section('container')
<div class="container-fluid mt-5 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Our Classes</h2>
        <a href="{{ route('admin.ourclass.create') }}" class="btn btn-primary shadow-sm">Add New</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle w-100 mb-0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Duration</th>
                            <th>Header Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ourclasses as $ourclass)
                            <tr>
                                <td>{{ $ourclass->title }}</td>
                                <td>
                                    <img src="{{ $ourclass->image }}" alt="image" class="img-thumbnail rounded" style="height: 80px; width: 80px; object-fit: cover;">
                                </td>
                                <td>{{ $ourclass->duration }}</td>
                                <td>{{ Str::limit($ourclass->header_description, 60) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.ourclass.edit', $ourclass) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.ourclass.destroy', $ourclass) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this class?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">No classes found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
