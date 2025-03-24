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
        $projects = Projects::all()->map(function ($project) {
            return [
                'project_name' => $project->project_name,
                'project_description' => $project->project_description,
                'project_image_url' => $project->project_image_url,
                'keywords' => json_decode($project->keywords, true),
                'github_icon_url' => $project->github_icon_url,
                'google_play_icon_url' => $project->google_play_icon_url,
                'github_url' => $project->github_url,
                'google_play_url' => $project->google_play_url
            ];
        });

        return inertia('Projects', [
            'setting' => $setting,
            'projects' => $projects,
        ]);
    }
}
