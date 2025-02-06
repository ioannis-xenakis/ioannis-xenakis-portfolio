<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Settings::findOrFail(1);

        return inertia('About', [
            'setting' => $setting,
        ]);
    }
}
