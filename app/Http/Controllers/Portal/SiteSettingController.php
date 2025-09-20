<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends PortalBaseController
{
    /**
     * Display settings page (all settings).
     */
    public function index()
    {
        $settings = SiteSetting::all()->keyBy('name'); // keyed for easy access in blade
        return $this->view('setting.index', compact('settings'));
    }

    /**
     * Store settings.
     */
    public function store(Request $request)
    {
        $settings = SiteSetting::all();

        foreach ($settings as $setting) {
            $key = $setting->name;

            if ($setting->name === 'logo_image' && $request->hasFile('logo_image')) {
                // Handle file upload (logo)
                $path = $request->file('logo_image')->store('logos', 'public');
                $setting->value = $path;
            } else {
                // Handle normal text/textarea
                if ($request->has($key)) {
                    $setting->value = $request->input($key);
                }
            }

            $setting->save();
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
