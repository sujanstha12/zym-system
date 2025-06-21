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
    <form method="POST" action="{{ route('admin.systemSetting.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <img src="{{ $systemSetting?->image }}"  height="100" width="100" alt="{{ $systemSetting?->name }}">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <img src="{{ $systemSetting?->logo }}"  height="100" width="100" alt="{{ $systemSetting?->name }}">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$systemSetting?->title) }}" >
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number',$systemSetting?->phone_number) }}" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$systemSetting?->email) }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address',$systemSetting?->address) }}">
        </div>

        <div class="mb-3">
            <label for="footer_description" class="form-label">Footer Description</label>
            <input type="text" class="form-control" id="footer_description" name="footer_description" value="{{ old('footer_description',$systemSetting?->footer_description) }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
 </div>
@endsection
