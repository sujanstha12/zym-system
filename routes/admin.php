<?php

use App\Http\Controllers\admin\ClassessController;
use App\Http\Controllers\admin\ClassScheduleController;
use App\Http\Controllers\admin\ContactMessageController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExerciseController;
use App\Http\Controllers\admin\InstructorController;
use App\Http\Controllers\admin\OurclassController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\SystemSettingController;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
Route::get('setting', [DashboardController::class, 'setting'])->name('setting');
Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
Route::put('logout',[DashboardController::class, 'logout'])->name('profile.logout');
Route::resource('systemSetting', SystemSettingController::class)->except('index', 'edit', 'update');
Route::resource('exercise', ExerciseController::class);
Route::resource('ourclass', OurclassController::class);
Route::resource('instructor', InstructorController::class);
Route::resource('classSchedule', ClassScheduleController::class);
Route::resource('contact', ContactMessageController::class);
Route::resource('product', ProductController::class);
Route::put('profile',[DashboardController::class,'profileUpdate'])->name('profile.update');
