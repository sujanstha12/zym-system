@extends('frontend.master')

@section('container')
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mx-auto py-10" style="margin-top: 110px;">Checkout your list</h2>

        <div class="bg-white p-6 rounded shadow-md max-w-xl mx-auto">
            <h3 class="text-xl font-semibold mb-2">{{ $product->title }}</h3>

            <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-40 h-40 object-cover mb-4">

            <p class="text-lg font-bold text-green-600">Price: NPR {{ $product->rate }}</p>

            <!-- Checkout form -->
            <form method="POST" action="{{ route('purchase.confirm') }}">
                @csrf

                <!-- Hidden input to send product ID -->
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <!-- Quantity input -->
                <div class="mt-4">
                    <label for="quantity" class="block font-medium mb-1">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                        class="w-24 px-3 py-2 border rounded" required>
                </div>

                <!-- Buyer Name (Optional enhancement) -->
                <div class="mt-4">
                    <label for="buyer_name" class="block font-medium mb-1">Your Name</label>
                    <input type="text" id="buyer_name" name="buyer_name" class="w-full px-3 py-2 border rounded"
                        required>
                </div>

                <!-- Phone number -->
                <div class="mt-4">
                    <label for="phone" class="block font-medium mb-1">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded" required>
                </div>

                <!-- Address -->
                <div class="mt-4">
                    <label for="address" class="block font-medium mb-1">Delivery Address</label>
                    <input type="text" name="address" id="address" class="w-full px-3 py-2 border rounded" required>
                </div>

                <!-- Confirm Button -->
                <button type="submit" class="mt-6 bg-green-600 text-white py-2 px-6 rounded hover:bg-green-700">
                    Confirm Purchase
                </button>
            </form>
        </div>
    </div>
@endsection
