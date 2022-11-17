<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exchange extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'price',
    ];

    public function assetPrices()
    {
        return $this->hasMany(assetPrice::class);
    }
    public function assets()
    {
        return $this->belongsToMany(asset::class, 'asset_prices');
    }

    use HasFactory;
}
