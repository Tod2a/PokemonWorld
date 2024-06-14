<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
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

        //get types
        $bug = Type::where('name', 'Bug')->first();
        $dark = Type::where('name', 'Dark')->first();
        $dragon = Type::where('name', 'Dragon')->first();
        $electric = Type::where('name', 'Electric')->first();
        $fairy = Type::where('name', 'Fairy')->first();
        $fight = Type::where('name', 'Fight')->first();
        $fire = Type::where('name', 'Fire')->first();
        $flying = Type::where('name', 'Flying')->first();
        $ghost = Type::where('name', 'Ghost')->first();
        $grass = Type::where('name', 'Grass')->first();
        $ground = Type::where('name', 'Ground')->first();
        $ice = Type::where('name', 'Ice')->first();
        $normal = Type::where('name', 'Normal')->first();
        $psychic = Type::where('name', 'Psychic')->first();
        $poison = Type::where('name', 'Poison')->first();
        $rock = Type::where('name', 'Rock')->first();
        $steel = Type::where('name', 'Steel')->first();
        $water = Type::where('name', 'Water')->first();

        //add resistance and weakness to pokemon
        $floroue->resistances()->sync([$water->id, $electric->id, $grass->id, $ground->id], false);
        $floroue->weaknesses()->sync([$fire->id, $ice->id, $bug->id, $poison->id, $flying->id], false);

        $folunarque->resistances()->sync([$water->id, $electric->id, $grass->id, $psychic->id, $ground->id, $ghost->id, $dark->id], false);
        $folunarque->weaknesses()->sync([$fight->id, $fairy->id, $fire->id, $ice->id, $bug->id, $poison->id, $flying->id], false);

        $noctoflore->resistances()->sync([$water->id, $electric->id, $grass->id, $psychic->id, $ground->id, $ghost->id, $dark->id]);
        $noctoflore->weaknesses()->sync([$fight->id, $fairy->id, $fire->id, $ice->id, $bug->id, $poison->id, $flying->id], false);

        $emberaptor->resistances()->sync([$steel->id, $fairy->id, $fire->id, $ice->id, $bug->id, $grass->id]);
        $emberaptor->weaknesses()->sync([$water->id, $rock->id, $ground->id]);
    }
}
