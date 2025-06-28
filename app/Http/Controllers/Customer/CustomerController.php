<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function dashboard()
  {

     $cartCount = CartItem::count();
    return view('customer.dashboard',compact('cartCount'));
  }

}
