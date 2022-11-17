<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\assetType;
use \App\Models\asset;
use \App\Models\exchange;
use \App\Models\assetPrice;

class AdminUpdateController extends Controller
{
    public function update_type(Request $req) {
        assetType::find($req->id)->update(['name' => $req->name]);

        return back();
    }

    public function update_asset_name(Request $req) {
        asset::find($req->id)->update(['name' => $req->name]);
        return back();
    }

    public function update_asset_symbol(Request $req) {
        asset::find($req->id)->update(['symbol' => $req->symbol]);
        return back();
    }

    public function update_asset_logo(Request $req) {
        asset::find($req->id)->update(['logo' => $req->logo]);
        return back();
    }
    public function update_asset_type_id(Request $req) {
        asset::find($req->id)->update(['asset_type_id' => $req->asset_type_id]);
        return back();
    }


    public function update_ex_name(Request $req) {
        exchange::find($req->id)->update(['name' => $req->name]);
        return back();
    }

    public function update_ex_logo(Request $req) {
        exchange::find($req->id)->update(['logo' => $req->logo]);
        return back();
    }

    public function update_ex_price(Request $req) {
        exchange::find($req->id)->assets->find($req->asset_id)->assetPrices->where('exchange_id', $req->id)->where('asset_id', $req->asset_id)->first()->update('price', $req->price);
        return back();
    }


    public function delete_type($id) {
        assetType::find($id)->delete();
        return back();
    }

    public function delete_asset($id) {
        asset::find($id)->delete();
        return back();
    }

    public function delete_ex($id) {
        exchange::find($id)->delete();
        return back();
    }

    public function delete_assetprice($id) {
        assetPrice::find($id)->delete();
        return back();
    }


    public function create_type(Request $req) {
        $type = new assetType;
        $type->name = $req->name;
        $type->save();

        return back();
    }

    public function create_asset(Request $req) {
        $asset = new asset;
        $asset->name = $req->name;
        $asset->symbol = $req->symbol;
        $asset->logo = $req->logo;
        $asset->asset_type_id = $req->asset_type_id;

        $asset->save();

        return back();
    }

    public function create_ex(Request $req) {
        $ex = new exchange;
        $ex->name = $req->name;
        $ex->logo = $req->logo;
        $ex->url = $req->url;

        $ex->save();

        return back();
    }

    public function create_linkex2as(Request $req) {
        $link = new assetPrice;
        $link->exchange_id = $req->exchange_id;
        $link->asset_id = $req->asset_id;
        $link->price = $req->price;
        $link->save();

        return back();
    }
}
