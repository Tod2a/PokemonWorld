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

    public function resistantPokemon()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_resistances');
    }

    public function weakPokemon()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_weaknesses');
    }
}
