@extends('admin.layout.master')
@section('container')
<div class="container mt-4" style="max-width: 1212px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Our Class</h2>
        <a href="{{ route('admin.ourclass.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>

                    <th>Title</th>
                    <th>Image</th>
                    <th>Duration</th>
                    <th>Header Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ourclasses as $ourclass)

                    <tr>

                        <td>{{ $ourclass->title }}</td>
                        <td> <img src="{{ $ourclass->image }}" alt="image" height="100" width="100" > </td>
                        <td>{{ $ourclass->duration }}</td>
                        <td>{{ $ourclass->header_description }}</td>

                        <td>
                            <a href="{{ route('admin.ourclass.edit', $ourclass) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.ourclass.destroy', $ourclass) }}" method="POST" class="d-inline">
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
