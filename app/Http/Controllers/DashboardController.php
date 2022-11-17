<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $assetTypes = \App\Models\assetType::all()->load('assets.exchanges.assets.assetPrices');

        return view('dashboard', compact('assetTypes'));
    }
}
