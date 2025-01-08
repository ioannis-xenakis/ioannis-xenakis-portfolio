<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use App\Models\Settings;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = Photos::findOrFail(1);
        $setting = Settings::findOrFail(1);

        return inertia('Home', [
            'photo' => $photo,
            'setting' => $setting,
        ]);
    }
}
