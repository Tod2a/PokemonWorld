<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Type::create([
            'name' => 'Bug',
            'imgurl' => '/storage/images/types/bug.png',
            'color' => 'light green',
        ]);

        \App\Models\Type::create([
            'name' => 'Dark',
            'imgurl' => '/storage/images/types/dark.png',
            'color' => 'dark',
        ]);

        \App\Models\Type::create([
            'name' => 'Dragon',
            'imgurl' => '/storage/images/types/dragon.png',
            'color' => 'dark blue',
        ]);

        \App\Models\Type::create([
            'name' => 'Electric',
            'imgurl' => '/storage/images/types/electric.png',
            'color' => 'yellow',
        ]);

        \App\Models\Type::create([
            'name' => 'Fairy',
            'imgurl' => '/storage/images/types/fairy.png',
            'color' => 'pink',
        ]);

        \App\Models\Type::create([
            'name' => 'Fight',
            'imgurl' => '/storage/images/types/fight.png',
            'color' => 'dark red',
        ]);

        \App\Models\Type::create([
            'name' => 'Fire',
            'imgurl' => '/storage/images/types/fire.png',
            'color' => 'red',
        ]);

        \App\Models\Type::create([
            'name' => 'Flying',
            'imgurl' => '/storage/images/types/flying.png',
            'color' => 'light blue',
        ]);

        \App\Models\Type::create([
            'name' => 'Ghost',
            'imgurl' => '/storage/images/types/ghost.png',
            'color' => 'dark grey',
        ]);

        \App\Models\Type::create([
            'name' => 'Grass',
            'imgurl' => '/storage/images/types/grass.png',
            'color' => 'green',
        ]);

        \App\Models\Type::create([
            'name' => 'Ground',
            'imgurl' => '/storage/images/types/ground.png',
            'color' => 'brown',
        ]);

        \App\Models\Type::create([
            'name' => 'Ice',
            'imgurl' => '/storage/images/types/ice.png',
            'color' => 'aqua',
        ]);

        \App\Models\Type::create([
            'name' => 'normal',
            'imgurl' => '/storage/images/types/Normal.png',
            'color' => 'grey',
        ]);

        \App\Models\Type::create([
            'name' => 'Psychic',
            'imgurl' => '/storage/images/types/psychic.png',
            'color' => 'pale pink',
        ]);

        \App\Models\Type::create([
            'name' => 'Poison',
            'imgurl' => '/storage/images/types/poison.png',
            'color' => 'purple',
        ]);

        \App\Models\Type::create([
            'name' => 'Rock',
            'imgurl' => '/storage/images/types/rock.png',
            'color' => 'light brown',
        ]);

        \App\Models\Type::create([
            'name' => 'Steel',
            'imgurl' => '/storage/images/types/steel.png',
            'color' => 'steel',
        ]);

        \App\Models\Type::create([
            'name' => 'Water',
            'imgurl' => '/storage/images/types/water.png',
            'color' => 'blue',
        ]);
    }
}
