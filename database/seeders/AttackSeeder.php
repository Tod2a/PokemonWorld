<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Attack::create([
            'name' => 'Pound',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attack::create([
            'name' => 'Bite',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'A swift and aggressive attack where the Pokémon sinks its sharp teeth into the opponent, causing immediate pain and potential flinching.',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Leaf Blade',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Pound1',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attack::create([
            'name' => 'Bite1',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Leaf Blade1',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Pound2',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attack::create([
            'name' => 'Bite2',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Leaf Blade2',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Pound3',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attack::create([
            'name' => 'Bite3',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Leaf Blade3',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Pound4',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 13,
        ]);

        \App\Models\Attack::create([
            'name' => 'Bite4',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'coming soon',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
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
