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
            'name' => 'test1',
            'description' => 'test1',
            'hp' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 1,
            'type2_id' => 2,
            'imgurl' => '/storage/images/pokemon/dark.png'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'test2',
            'description' => 'test2',
            'hp' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 3,
            'type2_id' => 4,
            'imgurl' => '/storage/images/pokemon/dark.png'
        ]);
    }

    
}
