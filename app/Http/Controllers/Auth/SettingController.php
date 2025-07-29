<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function show()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('auth.dashboard-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email',
            'site_logo' => 'nullable|image|max:2048',
        ]);
        Setting::updateOrCreate(['key' => 'site_name'], ['value' => $request->site_name]);
        Setting::updateOrCreate(['key' => 'site_email'], ['value' => $request->site_email]);
        if ($request->hasFile('site_logo')) {
            $logoPath = $request->file('site_logo')->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'site_logo'], ['value' => $logoPath]);
        }
        return redirect()->route('settings.show')->with('alert-success', 'Settings updated!');
    }
} 