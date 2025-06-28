@extends('admin.layout.master')

@section('container')
<div class="container-fluid mt-5 px-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Products</h2>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary shadow-sm">Add New</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Rate (NPR)</th>
                            <th scope="col">Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>
                                    <img src="{{ $product->image }}" alt="Image" class="img-thumbnail rounded" style="height: 80px; width: 80px; object-fit: cover;">
                                </td>
                                <td>Rs. {{ number_format($product->rate, 2) }}</td>
                                <td style="max-width: 300px;">{{ Str::limit($product->description, 100) }}</td>
                                <td>{{ $product->stock }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.product.edit',$product) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                    <form action="{{ route('admin.product.destroy', $product) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">No products found.....</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
