<?php

use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhotosController::class, 'index']);

Route::resource('photos', PhotosController::class)->except('index');
