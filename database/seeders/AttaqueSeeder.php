<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Attaque::create([
            'name' => 'Pound',
            'power' => 40,
            'accuracy' => 100,
            'description' => 'coming soon',
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite',
            'power' => 60,
            'accuracy' => 100,
            'description' => 'coming soon',
            'category_id' => 1,
            'type_id' => 2,
        ]);
    }
}
