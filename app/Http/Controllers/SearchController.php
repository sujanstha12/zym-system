<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Instructor;
use App\Models\Ourclass;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');
        $productLists = Product::where('title','like',"%{$query}%")->get();
        $instructors = Instructor::where('name','like',"%{$query}%")->get();
        $ourClasses =  Ourclass::where('title','like',"%{$query}%")->get();
        $exercises = Exercise::where('title','like',"%{$query}%")->get();

        $results = $productLists->merge($instructors)->merge($ourClasses)->merge($exercises);
        $resultsCount =$results->count();
        if($results->isEmpty())
        {
           return view('frontend.search',[
            'message' => 'No data found',
            'resultsCount' => $resultsCount
        ]);
        }
        return view('frontend.search',[
            'results' => $results,
            'resultsCount' => $resultsCount
        ]);



    }
}
