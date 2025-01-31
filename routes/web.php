<?php

use App\Http\Controllers\PhotosController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/about', [AboutPageController::class, 'index']);

Route::resource('photos', PhotosController::class)->except('index');
