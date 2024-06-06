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

    public function pokemonattaquelevels()
    {
        return $this->hasMany(PokemonAttaqueLevel::class);
    }
}
