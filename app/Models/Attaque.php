<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attaque extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function pokemonAttaqueLevels()
    {
        return $this->HasMany(PokemonAttaqueLevel::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
