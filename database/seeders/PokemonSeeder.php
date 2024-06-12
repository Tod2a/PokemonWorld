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
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/floroue.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Folunarque',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => 'storage/images/pokemon/folunarque.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Noctoflore',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => 'storage/images/pokemon/noctoflore.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Emberaptor',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 7,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/emberaptor.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Infernalynx',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 7,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/infernalynx.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Phoenixiraptor',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 7,
            'type2_id' => 8,
            'imgurl' => 'storage/images/pokemon/phoenixiraptor.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Aquadon',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 18,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/aquadon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Glacierippo',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 18,
            'type2_id' => 12,
            'imgurl' => 'storage/images/pokemon/glacierippo.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Cryostodon',
            'description' => 'comming soon',
            'hp' => 50,
            'att' => 50,
            'def' => 50,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 120,
            'type1_id' => 18,
            'type2_id' => 12,
            'imgurl' => 'storage/images/pokemon/cryostodon.jpg'
        ]);
    }
}
