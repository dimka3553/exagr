<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assetPrice extends Model
{

    public function asset()
    {
        return $this->belongsTo(asset::class);
    }

    public function exchange()
    {
        return $this->belongsTo(exchange::class);
    }


    use HasFactory;
}
