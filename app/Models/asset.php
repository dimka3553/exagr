<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    public function assetType()
    {
        return $this->belongsTo(assetType::class);
    }
    public function assetPrices()
    {
        return $this->hasMany(assetPrice::class);
    }
    public function exchanges()
    {
        return $this->belongsToMany(exchange::class, 'asset_prices');
    }

    use HasFactory;
}
