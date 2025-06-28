@extends('customer.layouts.master')

@section('content')
<main class="content w-100 py-4">
    <div class="container">
        <!-- Profile Summary -->
        <section class="profile-summary text-center mb-5">
            <h3>{{ Auth::guard('customer')->user()->name }}</h3>
            <p>{{ Auth::guard('customer')->user()->email }}</p>
            <p>{{ Auth::guard('customer')->user()->phone_number }}</p>
            <a href="#" class="btn btn-primary mt-2">Edit Profile</a>
        </section>

        <!-- Dashboard Boxes -->
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <i class="fa fa-shopping-cart fa-2x text-warning mb-2"></i>
                        <h4 class="mb-0">{{ $cartCount }}</h4>
                        <p class="text-muted">Cart Items</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <i class="fa fa-list-alt fa-2x text-success mb-2"></i>
                        <h4 class="mb-0">{{ $orderCount ?? 0 }}</h4>
                        <p class="text-muted">Total Orders</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <i class="fa fa-heart fa-2x text-danger mb-2"></i>
                        <h4 class="mb-0">{{ $wishlistCount ?? 0 }}</h4>
                        <p class="text-muted">Wishlist</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-2x text-info mb-2"></i>
                        <h4 class="mb-0">{{ $messagesCount ?? 0 }}</h4>
                        <p class="text-muted">Messages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
