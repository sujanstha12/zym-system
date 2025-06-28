<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Customer\LoginCustomerRequest;
use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerAuthController extends Controller
{
    public function registerPage()
    {
       return view('customer.auth.register');

    }

    public function register(RegisterCustomerRequest $request): RedirectResponse
    {

        Customer::create($request->validated());
        Alert::success("Registered succesfully");

        return redirect(route('customer.loginPage'));
    }

    public function loginPage()
    {
        return view('customer.auth.login');
    }
    public function login(LoginCustomerRequest $request): RedirectResponse
    {

        $request->authenticate();
        Alert::success("Login succesfully");

        return redirect(route('welcome'));
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect(route('customer.loginPage'));
    }
}
