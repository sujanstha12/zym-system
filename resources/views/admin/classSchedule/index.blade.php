@extends('admin.layout.master')
@section('container')
<div class="container mt-4" style="max-width: 1212px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>ClassSchedule</h2>
        <a href="{{ route('admin.classSchedule.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Class</th>
                    <th>Instructor</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classSchedules as $classSchedule)
                    <tr>
                        <td>{{ $classSchedule->ourClass->title }}</td>
                        <td>{{ $classSchedule->instructor->name }}</td>
                        <td>{{ $classSchedule->day }}</td>
                        <td>{{ $classSchedule->time }}</td>

                        <td>
                            <a href="{{ route('admin.classSchedule.edit',$classSchedule) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.classSchedule.destroy', $classSchedule) }}" method="POST" class="d-inline">
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
