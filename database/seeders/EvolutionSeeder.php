<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Evolution::create([
            'prevolution_id' => 1,
            'evolution_id' => 2,
            'level' => 16,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 2,
            'evolution_id' => 3,
            'level' => 36,
        ]);
    }
}
