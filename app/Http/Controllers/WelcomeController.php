<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $assetTypes = \App\Models\assetType::all()->load('assets');
        return view('welcome', compact('assetTypes'));
    }
}
