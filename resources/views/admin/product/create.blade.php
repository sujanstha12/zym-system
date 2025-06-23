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
        <a href="{{ route('admin.product.index') }}" class="btn btn-secondary mb-3">Back</a>

        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
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
                <label for="rate" class="form-label">Rate (in NPR)</label>
                <div class="input-group">
                    <span class="input-group-text">Rs.</span>
                    <input type="number" class="form-control" name="rate" id="rate" min="0" step="0.01"
                        placeholder="Enter rate in NPR">
                </div>
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
