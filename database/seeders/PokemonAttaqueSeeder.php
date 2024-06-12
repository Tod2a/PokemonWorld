<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonAttaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PokemonAttaqueLevel::create([
            'pokemon_id' => 1,
            'attaque_id' => 2,
            'level' => 1,
        ]);
    }
}