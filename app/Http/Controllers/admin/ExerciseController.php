<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exercise\StoreExerciseRequest;
use App\Http\Requests\Exercise\UpdateExerciseRequest;
use App\Models\Exercise;
use App\Models\Ourclass;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();

        return view('admin.exercise.index',compact('exercises'));
    }

    public function create()
    {
        $ourclasses=Ourclass::all();
        return view('admin.exercise.create',compact('ourclasses'));
    }


    public function store(StoreExerciseRequest $request)
    {
        Exercise::create($request->validated());
        Alert::success('Exercise created successfully');
        return back();
    }
    public function edit($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('admin.exercise.edit', compact('exercise'));
    }
    public function update(UpdateExerciseRequest $request, Exercise $exercise)
    {
        $exercise->update($request->validated());
        Alert::success('Exercise updated successfully');
        return redirect(route('admin.exercise.index'));
    }

    public function destroy(Exercise $exercise)

    {
        $exercise->delete();
        return back();
    }

}
