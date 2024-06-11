<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function Pokemons()
    {
        return $this->hasMany(Pokemon::class);
    }

    public function Attaques()
    {
        return $this->hasMany(Attaque::class);
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
