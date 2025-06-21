@extends('admin.layout.master')
@section('container')
    <div class="container-fluid mt-5">

        <a href="{{ route('admin.exercise.index') }}" class="btn btn-secondary mb-3">Back</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('admin.exercise.store') }}" enctype="multipart/form-data">
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
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="sets" class="form-label">Sets</label>
                <input type="text" class="form-control" id="sets" name="sets" value="{{ old('sets') }}">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="text" class="form-control" id="time" name="time" value="{{ old('time') }}">
            </div>

          
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
