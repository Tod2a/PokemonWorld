<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttackLevelPokemon extends Model
{
    use HasFactory;

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }

    public function attack()
    {
        return $this->belongsTo(Attack::class);
    }
}
