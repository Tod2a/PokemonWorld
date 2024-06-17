<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonZoneSeeder extends Seeder
{
    public function run(): void
    {
        //Get pokemon
        $floroue = Pokemon::where('name', 'Floroue')->first();
        $folunarque = Pokemon::where('name', 'Folunarque')->first();
        $noctoflore = Pokemon::where('name', 'Noctoflore')->first();
        $emberaptor = Pokemon::where('name', 'Emberaptor')->first();
        $infernalynx = Pokemon::where('name', 'Infernalynx')->first();
        $phoenixiraptor = Pokemon::where('name', 'Phoenixiraptor')->first();
        $aquadon = Pokemon::where('name', 'Aquadon')->first();
        $glacierippo = Pokemon::where('name', 'Glacierippo')->first();
        $cryostodon = Pokemon::where('name', 'Cryostodon')->first();
        $earthop = Pokemon::where('name', 'earthop')->first();
        $aerohare = Pokemon::where('name', 'aerohare')->first();
        $crawbug = Pokemon::where('name', 'crawbug')->first();
        $cocoonix = Pokemon::where('name', 'cocoonix')->first();
        $flitterfly = Pokemon::where('name', 'flitterfly')->first();


        $floroue->zones()->sync([14], false);

        $emberaptor->zones()->sync([14], false);

        $aquadon->zones()->sync([14], false);
    }
}
