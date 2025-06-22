<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\StoreContactRequest;
use App\Models\Classess;
use App\Models\Contact;
use App\Models\Exercise;
use App\Models\Instructor;
use App\Models\Ourclass;
use App\Models\Product;
use Illuminate\Http\Request;

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
        $products = Product::limit(12)->latest()->get();
        return view('frontend.ourproduct', compact('products'));
    }

    public function productdetails(Product $product)
    {

        return view('frontend.productdetails', compact('product'));
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

    public function storeContactMessage(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
