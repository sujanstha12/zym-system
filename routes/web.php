<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('about', [FrontendController::class, 'about'])->name('about');
    Route::get('/', [FrontendController::class, 'index'])->name('welcome');
    Route::get('ourclass', [FrontendController::class, 'ourclass'])->name('ourclass');
    Route::get('ourclassDetail/{ourclass}', [FrontendController::class, 'ourclassDetail'])->name('ourclassDetail');
    Route::get('ourproduct', [FrontendController::class, 'ourproduct'])->name('ourproduct');
    Route::post('upload', [UploadController::class, 'store'])->name('upload');
    Route::get('trainer', [FrontendController::class, 'trainer'])->name('trainer');
    Route::get('/trainer/{instructor}', [FrontendController::class, 'trainerDetails'])->name('trainerdetails');
    Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');
    Route::post('storeContactMessage', [FrontendController::class, 'storeContactMessage'])->name('storeContactMessage');
    Route::get('/admin/contact/{id}', [DashboardController::class, 'show'])->name('admin.contact.show');
    Route::delete('/admin/contact/{id}', [DashboardController::class, 'destroy'])->name('admin.contact.destroy');
    Route::get('productdetails', [FrontendController::class, 'productdetails'])->name('productdetails');
//customer auth

Route::get('customer/registerPage', [CustomerAuthController::class, 'registerPage'])->name('customer.registerPage');
Route::post('customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::get('customer/loginPage', [CustomerAuthController::class, 'loginPage'])->name('customer.loginPage');
Route::post('customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');

Route::get('/search',[SearchController::class,'search'])->name('search');

require __DIR__ . '/auth.php';
