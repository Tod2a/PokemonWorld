<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function Pokemon()
    {
        return $this->hasMany(Pokemon::class);
    }

    public function Attacks()
    {
        return $this->hasMany(Attack::class);
    }

    public function resistantPokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_resistance');
    }

    public function weakPokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_weakness');
    }
}
