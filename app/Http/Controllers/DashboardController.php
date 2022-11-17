<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $assetTypes = \App\Models\assetType::all()->load('assets.exchanges.assets.assetPrices');
        $assets = \App\Models\asset::all()->load('exchanges.assets.assetPrices');
        $exchanges = \App\Models\exchange::all()->load('assets.assetPrices');
        return view('dashboard', compact('assetTypes', 'assets', 'exchanges'));
    }
}
