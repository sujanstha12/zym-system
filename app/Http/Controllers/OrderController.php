<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index()
    {
        $customer =  Auth::guard('customer')->user()->id;
        $sales = Sale::where('customer_id', $customer)->get();

        return view('customer.order', compact('sales'));
    }

    public function cart()
    {
        $customer =  Auth::guard('customer')->user()->id;
        $cartItems = CartItem::where('customer_id', $customer)->with('product')->get();

        return view('customer.cart', compact('cartItems'));
    }

    public function deleteCart(CartItem $cart)

    {
        $cart->delete();
        return back();
    }
}
