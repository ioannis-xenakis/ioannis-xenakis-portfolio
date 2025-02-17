<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Photos;
use App\Models\TechStack;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Settings::findOrFail(1);
        $photo = Photos::findOrFail(1);
        $techStack = TechStack::all();

        return inertia('About', [
            'setting' => $setting,
            'photo' => $photo,
            'techStack' => $techStack,
        ]);
    }
}
