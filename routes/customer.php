<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::put('logout',[CustomerAuthController::class, 'logout'])->name('logout');


Route::get('dashboard',[CustomerController::class,'dashboard'])->name('dashboard');
Route::get('order', [OrderController::class,'index'])->name('order');
Route::get('cart', [OrderController::class,'cart'])->name('cart');
Route::delete('cart/{cart}', [OrderController::class,'deleteCart'])->name('cart.destroy');
