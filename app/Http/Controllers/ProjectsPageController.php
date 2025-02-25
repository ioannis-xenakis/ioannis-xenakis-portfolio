<?php

namespace App\Http\Controllers;

class ProjectsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Projects');
    }
}
