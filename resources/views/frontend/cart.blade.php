@extends('customer.layouts.master')
@section('content')
    <!-- Main Content -->
    <main class="content w-100">
    <div class="container my-10">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(count($cart) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Product</th>
                            <th class="py-3 px-6 text-left">Image</th>
                            <th class="py-3 px-6 text-center">Quantity</th>
                            <th class="py-3 px-6 text-right">Price</th>
                            <th class="py-3 px-6 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        @php $total = 0; @endphp
                        @foreach($cart as $item)
                            @php $subtotal = $item['quantity'] * $item['price']; $total += $subtotal; @endphp
                            <tr class="border-b border-gray-200">
                                <td class="py-3 px-6">{{ $item['name'] }}</td>
                                <td class="py-3 px-6">
                                    <img src="{{ $item['image'] }}" class="w-16 h-16 object-contain bg-gray-50 rounded">
                                </td>
                                <td class="py-3 px-6 text-center">{{ $item['quantity'] }}</td>
                                <td class="py-3 px-6 text-right">Rs. {{ $item['price'] }}</td>
                                <td class="py-3 px-6 text-right">Rs. {{ $subtotal }}</td>
                            </tr>
                        @endforeach
                        <tr class="bg-gray-100 font-bold">
                            <td colspan="4" class="py-3 px-6 text-right">Total</td>
                            <td class="py-3 px-6 text-right">Rs. {{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center text-gray-600">
                Your cart is empty.
            </div>
        @endif
    </div>
    </main>
@endsection
