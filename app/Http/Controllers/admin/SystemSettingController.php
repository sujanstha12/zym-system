<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemSetting\StoreSystemSettingRequest;
use App\Http\Requests\SystemSetting\UpdateSystemSettingRequest;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class SystemSettingController extends Controller
{
    public function create()
    {
        $systemSetting = SystemSetting::latest()->first();
        return view('admin.systemSetting.create',compact('systemSetting'));
    }

    public function store(StoreSystemSettingRequest $request)
    {
        if ($systemSetting = SystemSetting::latest()->first()) {
            if ($request->hasFile('logo') && $logo = $systemSetting->getRawOriginal('logo')) {
                $this->deleteFile($logo);
            }
            if ($request->hasFile('image') && $image = $systemSetting->getRawOriginal('image')) {
                $this->deleteFile($image);
            }
            $systemSetting->update($request->validated());
        } else {
            SystemSetting::create($request->validated());
        }
        Alert::success('Setting added successfully');
        Cache::forget('systemSetting');
       return back();

    }

}
