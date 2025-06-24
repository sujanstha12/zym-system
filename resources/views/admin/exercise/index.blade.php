@extends('admin.layout.master')

@section('container')
<div class="container-fluid mt-5 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Exercises</h2>
        <a href="{{ route('admin.exercise.create') }}" class="btn btn-primary shadow-sm">Add New</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle w-100 mb-0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Sets</th>
                            <th>Time</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($exercises as $exercise)
                            <tr>
                                <td>{{ $exercise->title }}</td>
                                <td>
                                    <img src="{{ $exercise->image }}" alt="Image" class="img-thumbnail rounded" style="height: 80px; width: 80px; object-fit: cover;">
                                </td>
                                <td>{{ $exercise->sets }}</td>
                                <td>{{ $exercise->time }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.exercise.edit', $exercise) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.exercise.destroy', $exercise) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this exercise?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">No exercises found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
