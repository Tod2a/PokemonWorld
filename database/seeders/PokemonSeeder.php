<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Pokemon::create([
            'name' => 'Floroue',
            'description' => 'à venir',
            'hp' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/floroue.png'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Folunarque',
            'description' => 'à venir',
            'hp' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => '/storage/images/pokemon/folunarque.png'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Noctoflore',
            'description' => 'à venir',
            'hp' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => '/storage/images/pokemon/noctoflore.png'
        ]);
    }
}
