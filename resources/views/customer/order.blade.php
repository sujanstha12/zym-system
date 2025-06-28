@extends('customer.layouts.master')
@section('content')
    <!-- Main Content -->
    <main class="content w-100">
        <div class="container">
            <h2 class="mb-4">Order List</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sale->product->title }}</td>
                            <td>{{ $sale->product->rate }}</td>
                            <td>{{ $sale->purchased_quantity }}</td>
                            <td>{{ $sale->product->rate * $sale->purchased_quantity }}</td>

                            <td>
                                @if ($sale->product->stock > 0)
                                    <span class="badge bg-success">Available</span>
                                @else
                                    <span class="badge bg-danger">Out of Stock</span>
                                @endif
                            </td>



                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
@endsection
