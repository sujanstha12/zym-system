@extends('admin.layout.master')
@section('container')
    <div class="container-fluid p-5 ">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ route('admin.classSchedule.update') }}" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
                <label for="ourclass_id" class="form-label">ourclass_id</label>
                <select class="form-select" name="ourclass_id" aria-label="Default select example">
                    <option value="">.....Choose Classess....</option>
                    @foreach ($ourclasses as $ourclass)
                        <option value="{{ $ourclass->id }}">{{ $ourclass->title }}</option>
                    @endforeach

                </select>
            </div>
             <div class="mb-3">
                <label for="instructor_id" class="form-label">instructor_id</label>
                <select class="form-select" name="instructor_id" aria-label="Default select example">
                    <option value="">.....Choose Instructor....</option>
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->title }}</option>
                    @endforeach

                </select>
            </div>

    <div class="mb-3">
    <label for="day" class="form-label">Day</label>
    <select class="form-select" name="day" id="day" aria-label="Select day of the week">
        <option value="">.....Select Day....</option>
        @foreach (\App\Enums\DayOfWeek::cases() as $day)
            <option value="{{ $day->value }}">
                {{ $day->label() }}
            </option>
        @endforeach
    </select>
</div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    @endsection
