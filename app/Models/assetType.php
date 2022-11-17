<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assetType extends Model
{

    protected $fillable = [
        'name'
    ];

    public function assets()
    {
        return $this->hasMany(asset::class);
    }

    use HasFactory;
}
