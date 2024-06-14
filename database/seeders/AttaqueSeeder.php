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
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Leaf Blade',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Pound1',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite1',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Leaf Blade1',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Pound2',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite2',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Leaf Blade2',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Pound3',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite3',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Leaf Blade3',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Pound4',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Bite4',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attaque::create([
            'name' => 'Leaf Blade4',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);
    }
}
