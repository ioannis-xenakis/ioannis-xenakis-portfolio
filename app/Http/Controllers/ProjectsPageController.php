<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Projects;

class ProjectsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Settings::findOrFail(1);
        $projects = Projects::all();

        return inertia('Projects', [
            'setting' => $setting,
            'projects' => $projects,
        ]);
    }
}
