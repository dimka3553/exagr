<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    protected $fillable = [
        'name',
        'symbol',
        'logo',
        'asset_type_id',
    ];

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
