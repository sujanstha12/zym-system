<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::put('logout',[CustomerAuthController::class, 'logout'])->name('logout');


Route::get('dashboard',[CustomerController::class,'dashboard'])->name('dashboard');

