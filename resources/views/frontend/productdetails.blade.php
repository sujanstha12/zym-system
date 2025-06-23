@extends('frontend.master')

@section('container')
    <x-content :name="'PRODUCT DETAILS'"
        paragraph="We have highly professional and expert instructors who play a vital role in maintaining our health. They are dedicated and knowledgeable, helping you overcome challenges and achieve your fitness goals." />

    <div class="container mx-auto mt-20 px-4 lg:px-0 py-10 flex flex-col lg:flex-row gap-10">

        <!-- Product Detail Section -->
        <div class="w-full lg:w-2/3 bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="w-full md:w-1/2">
                    <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/shop/2.jpg" alt="Hand Dumbbell"
                        class="w-full h-auto rounded-md shadow-sm object-cover">
                </div>

                <div class="w-full md:w-1/2">
                    <h1 class="text-2xl font-bold text-gray-800 mb-3">HAND DUMBBELL</h1>

                    <p class="text-gray-700 mb-4">
                        Hand Dumbbell is a professional fitness tool used by experts. It helps maintain strength and form.
                        Ideal for home or gym use.
                    </p>

                    <ul class="text-sm text-gray-600 mb-4 space-y-1">
                        <li><strong>Stock:</strong> <span class="text-green-600 font-semibold">Available</span></li>
                        <li><strong>SKU:</strong> 35487kbckl</li>
                        <li><strong>Category:</strong> Fitness</li>
                        <li><strong>Tags:</strong> Fitness, Gym, Instrument, Bodybuilding</li>
                    </ul>

                    <!-- Quantity + Cart -->

                </div>
            </div>
        </div>

        <!-- Sidebar Section -->
        <aside class="w-full lg:w-1/3 space-y-6">
            <!-- Search -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-3">Search</h2>
                <div class="flex">
                    <input type="text" placeholder="Keywords here"
                        class="w-full px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none">
                    <button
                        class="bg-gray-700 text-white px-4 rounded-r-md hover:bg-black transition">🔍</button>
                </div>
            </div>

            <!-- Categories -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-3">Categories</h2>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex justify-between border-b pb-1">Fitness Ball <span>25</span></li>
                    <li class="flex justify-between border-b pb-1">Gym Bag <span>52</span></li>
                    <li class="flex justify-between">Water Bottle <span>12</span></li>
                </ul>
            </div>
        </aside>

    </div>
@endsection
