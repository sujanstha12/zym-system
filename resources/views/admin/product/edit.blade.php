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

<form method="POST" action="{{ route('admin.product.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

          <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

        <div class="mb-3">
            <label for="rate" class="form-label">Rate</label>
            <input type="text" class="form-control" name="rate" id="rate">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="stock" class="form-control" name="stock" id="stock">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
 </div>
@endsection
