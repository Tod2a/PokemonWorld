<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttackPokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AttackLevelPokemon::create([
            'pokemon_id' => 1,
            'attack_id' => 2,
            'level' => 1,
        ]);
    }
}
