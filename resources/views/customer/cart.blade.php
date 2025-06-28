@extends('customer.layouts.master')
@section('content')
    <!-- Main Content -->
    <main class="content w-100">
        <div class="container">
            <h2 class="mb-4">Cart List</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $cart)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cart->product->title }}</td>
                            <td>{{ $cart->product->rate }}</td>
                            <td>
                                <a href="{{ route('checkout.buyNow', $cart->product->id) }}" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i> Buy Now
                                </a>
                                <form action="{{ route('customer.cart.destroy', $cart) }}" method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this class?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
@endsection
