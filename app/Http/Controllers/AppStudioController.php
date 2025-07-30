<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppStudioController extends Controller
{
    public function overview(){
        return view('components_for_app_studio.overview');
    }
}
