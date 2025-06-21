<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ourclass\StoreOurclassRequest;
use App\Http\Requests\Ourclass\UpdateOurclassRequest;
use App\Models\Ourclass;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OurclassController extends Controller
{
    public function index()
    {
        $ourclasses = Ourclass::all();

        return view('admin.ourclass.index',compact('ourclasses'));
    }

    public function create()
    {
        return view('admin.ourclass.create');
    }


    public function store(StoreOurclassRequest $request)
    {
        Ourclass::create($request->validated());
        Alert::success('Ourclass created successfully');
        return back();
    }
    public function edit($id)
    {
        $ourclass = Ourclass::findOrFail($id);
        return view('admin.ourclass.edit', compact('ourclass'));
    }
    public function update(UpdateOurclassRequest $request, Ourclass $ourclass)
    {
        $ourclass->update($request->validated());
        Alert::success('Ourclass updated successfully');
        return redirect(route('admin.ourclass.index'));
    }

    public function destroy(Ourclass $ourclass)

    {
        $ourclass->delete();
        return back();
    }

}
