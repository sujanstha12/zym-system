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
  <form method="POST" action="{{ route('admin.instructor.update', $instructor->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$instructor->name)}}">
        </div>

          <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

        <div class="mb-3">
            <label for="post" class="form-label">Post:</label>
            <input type="text" class="form-control" name="post" id="post" value="{{ old('post',$instructor->post)}}">
        </div>

        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number:</label>
            <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ old('contact_number',$instructor->contact_number)}}">
        </div>

        <div class="mb-3">
            <label for="facebook_url" class="form-label">Facebook URL:</label>
            <input type="url" class="form-control" name="facebook_url" id="facebook_url">
        </div>

        <div class="mb-3">
            <label for="twitter_url" class="form-label">Twitter URL:</label>
            <input type="url" class="form-control" name="twitter_url" id="twitter_url">
        </div>

       <div class="mb-3">
    <label for="biography" class="form-label">Biography:</label>
    <textarea class="form-control" name="biography" id="biography" rows="4">{{ old('biography', $instructor->biography) }}</textarea>
</div>

<div class="mb-3">
    <label for="achievement" class="form-label">Achievement:</label>
    <textarea class="form-control" name="achievement" id="achievement" rows="3">{{ old('achievement', $instructor->achievement) }}</textarea>
</div>

<div class="mb-3">
    <label for="address" class="form-label">Address:</label>
    <textarea class="form-control" name="address" id="address" rows="2">{{ old('address', $instructor->address) }}</textarea>
</div>


        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email',$instructor->email)}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
 </div>
@endsection
