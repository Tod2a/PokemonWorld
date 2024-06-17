<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public function map()
    {
        return $this->belongsTo(Map::class);
    }

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
