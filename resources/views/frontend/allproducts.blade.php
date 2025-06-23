@extends('frontend.master')

@section('container')
    <x-content :name="'All Products'" paragraph="Browse all our available fitness gear." />

    <div class="container my-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">{{ $product->title }}</h3>
                        <p class="text-green-600 font-semibold mt-2">NPR {{ $product->rate }}</p>

                        <div class="mt-4 space-y-2">
                            <a href="{{ route('checkout.buyNow', $product->id) }}" class="block bg-green-600 text-white text-center py-2 rounded hover:bg-green-700">Buy Now</a>
                            <a href="{{ route('add.cart', $product->id) }}" class="block bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </div>
@endsection
