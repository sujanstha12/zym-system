@extends('admin.layout.master')

@section('container')
<div class="container-fluid mt-5 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Class Schedules</h2>
        <a href="{{ route('admin.classSchedule.create') }}" class="btn btn-primary shadow-sm">Add New</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle w-100 mb-0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Class</th>
                            <th>Instructor</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($classSchedules as $classSchedule)
                            <tr>
                                <td>{{ $classSchedule->ourClass->title ?? 'N/A' }}</td>
                                <td>{{ $classSchedule->instructor->name ?? 'N/A' }}</td>
                                <td>{{ $classSchedule->day }}</td>
                                <td>{{ \Carbon\Carbon::parse($classSchedule->start_time)->format('g:i A') }}</td>
                                <td>{{ \Carbon\Carbon::parse($classSchedule->end_time)->format('g:i A') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.classSchedule.edit', $classSchedule) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.classSchedule.destroy', $classSchedule) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this schedule?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">No class schedules found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
