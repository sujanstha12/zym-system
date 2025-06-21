@extends('frontend.master')
@section('container')
    <x-content : name="OUR PRODUCTS"
        paragraph="We have highly professional and expert instructors who play a vital role in maintaining our health. They are dedicated and knowledgeable, helping you overcome challenges and achieve your fitness goals." />

    <div class="product-container mt-5">
        @foreach ($products->take(12) as $product)
            <!-- Product 1 -->
            <div class="product-card">
                <div class="image">
                    <img src="{{ $product->image }}" alt="Fitness Slam Ball">
                </div>
                <div class="details">
                    <h3>{{ $product->title }}</h3>
                    <p>{{ $product->rate }}</p>
                    <a href="#" class="btn"> Add to Cart </a>
                </div>
            </div>
        @endforeach

    </div>

    <div style="text-align: center;">
        <a href="#" class="btn">view all</a>
    </div>
@endsection
