<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use Inertia\Inertia;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photos::findOrFail(1);
        return inertia('Home', ['photos' => $photos]);
    }
}
