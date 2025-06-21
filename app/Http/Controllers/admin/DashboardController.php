<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
public function profile(Request $request)
   {
    return view('admin.profile', [
        'user' => $request->user(),
    ]);
   }

   public function profileUpdate(ProfileUpdateRequest $request)
    {

        $request->user()->fill($request->validated());
        $request->user()->save();
        Alert::success('Profile Updated successfully');
        return redirect(route('admin.profile.update'));
    }


    public function logout()
    {
        Auth::guard('web')->logout();
        return(redirect(route('login')));
    }
    public function setting()
    {
        return view('admin.setting');
    }



}
