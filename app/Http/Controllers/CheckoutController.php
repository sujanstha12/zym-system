<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class CheckoutController extends Controller
{
    public function buyNow($id)
    {
        $product = Product::findOrFail($id);

        if ($product->rate <= 0) {
            // Store order directly (for free package)
            $order = Order::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'amount' => 0,
                'status' => 'completed',
                'payment_method' => 'free',
            ]);

            return redirect()->route('thankyou')->with('success', 'Product successfully ordered for free.');
        }

        // Paid product — redirect to eSewa or show payment page
        return view('frontend.payment.esewa', compact('product'));
    }
}
