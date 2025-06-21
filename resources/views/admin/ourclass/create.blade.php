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
<a href="{{ route('admin.ourclass.index') }}" class="btn btn-secondary mb-3">Back</a>

    <form method="POST" action="{{ route('admin.ourclass.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" >
        </div>

        <div class="mb-3">
            <label for="header_description" class="form-label">Header Description</label>
            <input type="text" class="form-control" id="header_description" name="header_description" value="{{ old('header_description') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="editor" name="description" rows="4">{{ old('description') }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
 </div>
@endsection
