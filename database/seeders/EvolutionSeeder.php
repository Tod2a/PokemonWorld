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

        \App\Models\Evolution::create([
            'prevolution_id' => 4,
            'evolution_id' => 5,
            'level' => 16,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 5,
            'evolution_id' => 6,
            'level' => 36,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 7,
            'evolution_id' => 8,
            'level' => 16,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 8,
            'evolution_id' => 9,
            'level' => 36,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 10,
            'evolution_id' => 11,
            'level' => 22,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 12,
            'evolution_id' => 13,
            'level' => 7,
        ]);

        \App\Models\Evolution::create([
            'prevolution_id' => 13,
            'evolution_id' => 14,
            'level' => 10,
        ]);
    }
}
