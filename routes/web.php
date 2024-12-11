<?php

use App\Http\Controllers\PhotosController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);

Route::resource('photos', PhotosController::class)->except('index');
