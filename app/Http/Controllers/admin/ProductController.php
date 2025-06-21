<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
     public function index()
    {
        $products = Product::all();

        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }


    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        Alert::success('Product created successfully');
        return back();
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        Alert::success('Product updated successfully');
        return redirect(route('admin.product.index'));
    }

    public function destroy(Product $product)

    {
        $product->delete();
        return back();
    }
}
