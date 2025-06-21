@extends('admin.layout.master')
@section('container')
<div class="container-fluid mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('admin.exercise.update', $exercise) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$exercise->title) }}" >
        </div>

        <div class="mb-3">
            <label for="sets" class="form-label">Sets</label>
            <input type="text" class="form-control" id="sets" name="sets" value="{{ old('sets',$exercise->sets) }}" >
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="text" class="form-control" id="time" name="time" value="{{ old('time',$exercise->time) }}" >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
 </div>
@endsection
