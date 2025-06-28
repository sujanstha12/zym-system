<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreSaleRequest;
use App\Mail\PurchaseEmail;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class SaleController extends Controller
{
    public function sale(Request $request, Product $ourproduct)
    {
        $request->validate([
            'purchased_quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $purchasedQty = $request->purchased_quantity;

        if ($purchasedQty > $ourproduct->stock) {
            Alert::error('Not enough stock available!');
            return back();
        }

        $ourproduct->stock -= $purchasedQty;
        $ourproduct->save();

        $customer = Auth::guard('customer')->user();

        $sale = Sale::updateOrCreate(
            [
                'customer_id' => $customer->id,
                'product_id' => $ourproduct->id,
            ],
            [
                'purchased_quantity' => $purchasedQty,
            ]
        );

        Mail:: to($customer->email)->send(new PurchaseEmail($customer,$ourproduct));
        Alert::success('Product purchased successfully!');
        return back();
    }
}
