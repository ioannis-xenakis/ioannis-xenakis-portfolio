<?php

namespace App\Http\Controllers;

use App\Models\Settings;

class ProjectsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Settings::findOrFail(1);

        return inertia('Projects', [
            'setting' => $setting,
        ]);
    }
}
