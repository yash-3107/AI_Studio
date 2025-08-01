<?php

use App\Http\Controllers\AppStudioController;
use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studio',[StudioController::class,'index']);
Route::get('/studio/app/overview', [AppStudioController::class, 'overview']);
Route::get('/studio/app/apps', [AppStudioController::class, 'apps']);
Route::get('/studio/app/deployments', [AppStudioController::class, 'deployments']);
Route::get('/studio/app/observability', [AppStudioController::class, 'observability']);
Route::get('/studio/app/manage-users', [AppStudioController::class, 'manageUsers']);
Route::get('/studio/app/file-manager', [AppStudioController::class, 'fileManager']);
Route::get('/studio/app/audit-trail', [AppStudioController::class, 'auditTrail']);
Route::get('/studio/app/key-vault', [AppStudioController::class, 'keyVault']);
Route::get('/studio/app/support', [AppStudioController::class, 'support']);
Route::get('/studio/app/subscription-plans', [AppStudioController::class, 'subscriptionPlans']);
Route::get('/studio/app/billing', [AppStudioController::class, 'billing']);
Route::get('/studio/app/faqs', [AppStudioController::class, 'faqs']);