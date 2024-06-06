<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonAttaqueLevel extends Model
{
    use HasFactory;

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }

    public function attaque()
    {
        return $this->belongsTo(Attaque::class);
    }
}
