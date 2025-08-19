<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public  function updateIcon(Request $request)
    {
        $path = FileManager::findorfail($request->image_id)->public_path;
        $setting  = Setting::first();

        $setting->icon = $path;

        $setting->save();

        return redirect()->route('dashboard');
    }
}
