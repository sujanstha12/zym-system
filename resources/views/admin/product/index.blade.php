@extends('admin.layout.master')
@section('container')
<div class="container mt-4" style="max-width: 1212px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Product</h2>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>

                    <th>Title</th>
                    <th>Image</th>
                    <th>Rate</th>
                    <th>Description </th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                         <td><img src="{{ $product->image }}" alt="image" height="100" width="100"></td>
                        <td>{{ $product->rate }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->stock }}</td>


                        <td>
                            <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.product.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No data found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
