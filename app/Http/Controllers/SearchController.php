<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke($assetone_id, $assettwo_id)
    {
        $assetTypes = \App\Models\assetType::all()->load('assets');
        $assetOne = \App\Models\asset::find($assetone_id)->load('exchanges.assets.assetPrices');
        $assetTwo = \App\Models\asset::find($assettwo_id)->load('exchanges.assets.assetPrices');

        $exchanges = $assetOne->exchanges->intersect($assetTwo->exchanges)->unique('id');;
        return view('search', compact('assetTypes', 'assetone_id', 'assettwo_id', 'assetOne', 'assetTwo', 'exchanges'));
    }
}
