@extends('admin.layout.master')

@section('container')
<div class="container mt-5" style="max-width: 800px;">
    <a href="{{ route('admin.classSchedule.index') }}" class="btn btn-secondary mb-4">
        <i class="fas fa-arrow-left me-1"></i> Back
    </a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some issues with your submission:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create New Class Schedule</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.classSchedule.update',$classSchedule) }}">
                @csrf
@method('PUT')
                <div class="mb-3">
                    <label for="ourclass_id" class="form-label">Class</label>
                    <select class="form-select" name="ourclass_id">
                        <option value="">-- Choose a Class --</option>
                        @foreach ($ourclasses as $ourclass)
                            <option value="{{ $ourclass->id }}">{{ $ourclass->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="instructor_id" class="form-label">Instructor</label>
                    <select class="form-select" name="instructor_id">
                        <option value="">-- Choose an Instructor --</option>
                        @foreach ($instructors as $instructor)
                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Day</label>
                    <select class="form-select" name="day" id="day">
                        <option value="">-- Select a Day --</option>
                        @foreach (\App\Enum\ListofWeek::cases() as $day)
                            <option value="{{ $day->value }}">{{ $day->label() }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Time</label>
                    <div class="row">
                        <div class="col">
                            <input type="time" class="form-control" name="start_time" placeholder="From">
                        </div>
                        <div class="col">
                            <input type="time" class="form-control" name="end_time" placeholder="To">
                        </div>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check-circle me-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
