<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use Inertia\Inertia;

class PhotosController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Photos $photos)
    {
        return inertia('Home', [
            'photo' => 'test_photo',
        ]);
    }
}
