<?php

use App\Http\Controllers\AppStudioController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AgentStudioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Agent Studio Module
Route::get('/studio/agent/overview', [AgentStudioController::class, 'overview']);
Route::get('/studio/agent/projects', [AgentStudioController::class, 'projects']);
Route::get('/studio/agent/components', [AgentStudioController::class, 'components']);
Route::get('/studio/agent/flow_deployment', [AgentStudioController::class, 'flow_deployment']);
Route::get('/studio/agent/component_deployment', [AgentStudioController::class, 'component_deployment']);
Route::get('/studio/agent/observability', [AgentStudioController::class, 'observability']);
Route::get('/studio/agent/manage_users', [AgentStudioController::class, 'manage_users']);
Route::get('/studio/agent/file_manager', [AgentStudioController::class, 'file_manager']);
Route::get('/studio/agent/audit_trail', [AgentStudioController::class, 'audit_trail']);
Route::get('/studio/agent/key_vault', [AgentStudioController::class, 'key_vault']);
Route::get('/studio/agent/support', [AgentStudioController::class, 'support']);
Route::get('/studio/agent/subscription_plans', [AgentStudioController::class, 'subscription_plans']);
Route::get('/studio/agent/billing', [AgentStudioController::class, 'billing']);
Route::get('/studio/agent/faqs', [AgentStudioController::class, 'faqs']);

Route::get('/studio', [StudioController::class, 'index']);
Route::get('/studio/app/overview', [AppStudioController::class, 'overview']);
