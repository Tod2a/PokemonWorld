<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attack extends Model
{
    use HasFactory;

    protected $table = 'attacks';

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function attackLevelPokemon()
    {
        return $this->HasMany(AttackLevelPokemon::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
