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
            'imgurl' => '/storage/images/attaque/physical.png'
        ]);

        \App\Models\Category::create([
            'name' => \App\Models\Category::SPECIAL,
            'imgurl' => '/storage/images/attaque/special.png'
        ]);

        \App\Models\Category::create([
            'name' => \App\Models\Category::STATUS,
            'imgurl' => '/storage/images/attaque/status.png'
        ]);
    }
}
