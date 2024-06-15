<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Pokemon extends Model
{
    use HasFactory;

    public function type1()
    {
        return $this->belongsTo(Type::class, "type1_id");
    }

    public function type2()
    {
        return $this->belongsTo(Type::class, "type2_id");
    }

    public function attackLevelPokemon()
    {
        return $this->HasMany(AttackLevelPokemon::class);
    }

    public function resistances()
    {
        return $this->belongsToMany(Type::class, 'pokemon_resistances');
    }

    public function weaknesses()
    {
        return $this->belongsToMany(Type::class, 'pokemon_weaknesses');
    }

    public function evolution()
    {
        return $this->hasOne(Evolution::class, 'evolution_id');
    }

    // Relation pour la pré-évolution du Pokémon
    public function prevolution()
    {
        return $this->hasOne(Evolution::class, 'prevolution_id');
    }
}
