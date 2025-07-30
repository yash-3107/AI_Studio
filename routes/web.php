<?php

use App\Http\Controllers\AppStudioController;
use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studio',[StudioController::class,'index']);
Route::get('/studio/app/overview',[AppStudioController::class,'overview']);