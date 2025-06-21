@extends('admin.layout.master')
@section('container')
<div class="container mt-4" style="max-width: 1212px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Exercise</h2>
        <a href="{{ route('admin.exercise.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>

                    <th>Title</th>
                    <th>Image</th>
                    <th>Sets</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($exercises as $exercise)
                    <tr>
                        <td>{{ $exercise->title }}</td>
                        <td><img src="{{ $exercise->image }}" alt="image" height="100" width="100"></td>
                        <td>{{ $exercise->sets }}</td>
                        <td>{{ $exercise->time }}</td>

                        <td>
                            <a href="{{ route('admin.exercise.edit', $exercise) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.exercise.destroy', $exercise) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No data found</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>
@endsection
