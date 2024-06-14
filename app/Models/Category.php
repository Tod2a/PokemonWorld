<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public const PHYSICS = "physical";
    public const SPECIAL = "special";
    public const STATUS = "status";

    public static function category()
    {
        return [
            self::PHYSICS,
            self::SPECIAL,
            self::STATUS,
        ];
    }

    public function Attacks()
    {
        return $this->hasMany(Attack::class);
    }
}
