<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolution extends Model
{
    use HasFactory;

    public function prevolutionPokemon()
    {
        return $this->belongsTo(Pokemon::class, 'prevolution_id');
    }

    // Relation avec le Pokémon évolution
    public function evolutionPokemon()
    {
        return $this->belongsTo(Pokemon::class, 'evolution_id');
    }
}
