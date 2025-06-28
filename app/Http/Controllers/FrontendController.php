<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\StoreContactRequest;
use App\Models\CartItem;
use App\Models\Classess;
use App\Models\Contact;
use App\Models\Exercise;
use App\Models\Instructor;
use App\Models\Ourclass;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function index()
    {
        $exercises = Exercise::limit(4)->latest()->get();
        return view('welcome', compact('exercises'));
    }
    public function about()
    {
        $exercises = Exercise::limit(4)->latest()->get();
        return view('frontend.about', compact('exercises'));
    }
    public function ourclass()
    {
        $ourclasses = Ourclass::limit(8)->latest()->get();
        return view('frontend.ourclass', compact('ourclasses'));
    }
    public function ourclassDetail(Ourclass $ourclass)
    {
        $ourclasses = Ourclass::all();
        $exercises = $ourclass->exercises;
        return view('frontend.classdetail', compact('ourclass', 'ourclasses', 'exercises'));
    }
    public function ourproduct()
    {
        $customerID = Auth::guard('customer')->user()->id;

        $products = Product::limit(12)->latest()->get();
        return view('frontend.ourproduct', compact('products', 'customerID'));
    }

    public function productdetails(Product $ourproduct)
    {

        return view('frontend.productdetails', compact('ourproduct'));
    }




    public function addToCart(Product $ourproduct)
    {

        $customerID = Auth::guard('customer')->user()->id;
        $cart = CartItem::updateOrCreate(
            [
                'customer_id' => $customerID,
                'product_id' => $ourproduct->id,
            ],

        );
        Alert::success('Product added to cart successfully!');

        return redirect()->back();
    }
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart', compact('cart'));
    }













    // In FrontendController.php
    public function allProducts()
    {
        $products = Product::latest()->paginate(12);
        return view('frontend.allproducts', compact('products'));
    }
    public function buyNow(Product $product)
    {
        return view('frontend.checkout', compact('product'));
    }

    public function trainer()
    {
        $instructors = Instructor::limit(8)->latest()->get();
        return view('frontend.trainer', compact('instructors'));
    }

    public function trainerDetails(Instructor $instructor)
    {
        return view('frontend.trainerdetails', compact('instructor'));
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }


    public function profile()
    {
        return view("frontend.profile");
    }
    public function myorder()
    {
        return view("frontend.myorder");
    }

    public function storeContactMessage(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
