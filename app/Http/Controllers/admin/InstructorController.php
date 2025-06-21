<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Instructor\StoreInstructorRequest;
use App\Http\Requests\Instructor\UpdateInstructorRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();

        return view('admin.instructor.index',compact('instructors'));
    }

    public function create()
    {

        return view('admin.instructor.create');
    }


    public function store(StoreInstructorRequest $request)
    {
        Instructor::create($request->validated());
        Alert::success('Instructor created successfully');
        return back();
    }
    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('admin.instructor.edit', compact('instructor'));
    }
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        $instructor->update($request->validated());
        Alert::success('Instructor updated successfully');
        return redirect(route('admin.instructor.index'));
    }

    public function destroy(Instructor $instructor)

    {
        $instructor->delete();
        return back();
    }
}
