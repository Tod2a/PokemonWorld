<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => \App\Models\Category::PHYSICS,
            'imgurl' => '/storage/images/attack/physical.png'
        ]);

        \App\Models\Category::create([
            'name' => \App\Models\Category::SPECIAL,
            'imgurl' => '/storage/images/attack/special.png'
        ]);

        \App\Models\Category::create([
            'name' => \App\Models\Category::STATUS,
            'imgurl' => '/storage/images/attack/status.png'
        ]);
    }
}
