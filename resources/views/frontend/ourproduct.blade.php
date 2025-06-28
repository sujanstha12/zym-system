@extends('frontend.master')

@section('container')
    <x-content :name="'OUR PRODUCTS'"
        paragraph="We have highly professional and expert instructors who play a vital role in maintaining our health. They are dedicated and knowledgeable, helping you overcome challenges and achieve your fitness goals." />


    <div class="container my-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products->take(12) as $ourproduct)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition duration-300">
                  <img src="{{ $ourproduct->image }}" alt="{{ $ourproduct->title }}" class="w-full h-48 object-contain bg-gray-100">

                  <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $ourproduct->title }}</h3>
                        <p class="text-green-600 font-bold mt-2">NPR {{ $ourproduct->rate }}</p>

                        <div class="mt-4 flex flex-col space-y-2">
                            <a href="{{ route('productdetails', $ourproduct) }}"
                                class="bg-gray-200 text-gray-800 py-2 px-4 rounded hover:bg-gray-300 text-center">
                                View Details
                            </a>

                            <!-- Add to Cart Button -->

                            <a href="{{ route('add.cart', $ourproduct) }}"
                                class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 text-center block">
                                Add to Cart
                            </a>


                             <!-- Buy Now Button -->
                            <a href="{{ route('checkout.buyNow', $ourproduct) }}"
                                class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 text-center block">
                                Buy Now
                            </a>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="text-center mt-8">
            <a href="{{ route('product.index') }}" class="bg-black text-white py-2 px-6 rounded hover:bg-gray-800">
                View All Products
            </a>
        </div> --}}
    </div>
@endsection
