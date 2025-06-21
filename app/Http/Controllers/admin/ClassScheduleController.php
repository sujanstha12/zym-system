<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassSchedule\StoreClassScheduleRequest;
use App\Http\Requests\ClassSchedule\UpdateClassScheduleRequest;
use App\Models\ClassSchedule;
use App\Models\Instructor;
use App\Models\Ourclass;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClassScheduleController extends Controller
{
    public function index()
    {
        $classSchedules = ClassSchedule::all();

        return view('admin.classSchedule.index', compact('classSchedules'));
    }

    public function create()
    {
        $ourclasses = Ourclass::all();
        $instructors = Instructor::all();
        return view('admin.classSchedule.create',compact('ourclasses','instructors'));
    }
    public function store(StoreClassScheduleRequest $request)
    {
        ClassSchedule::create($request->validated());
        Alert::success('ClassSchedule created successfully');
        return back();
    }
    public function edit($id)
    {
        $classSchedules = ClassSchedule::findOrFail($id);
        return view('admin.classSchedule.edit', compact('classSchedules'));
    }
    public function update(UpdateClassScheduleRequest $request, ClassSchedule $classSchedules)
    {
        $classSchedules->update($request->validated());
        Alert::success('ClassSchedule updated successfully');
        return redirect(route('admin.classSchedule.index'));
    }

    public function destroy(ClassSchedule $classSchedules)

    {
        $classSchedules->delete();
        return back();
    }
}
