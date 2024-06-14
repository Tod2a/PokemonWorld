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
            'description' => 'A basic yet effective attack where the Pokémon delivers a swift strike with its paws or tail, utilizing its agility to surprise opponents and inflict moderate damage.',
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
            'description' => 'An attack where the Pokémon slashes at its opponent with razor-sharp leaves, harnessing nature\'s power to deliver swift and precise strikes, often causing critical hits due to its cutting edge.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Fissure',
            'power' => 120,
            'accuracy' => 25,
            'maxpp' => 5,
            'description' => 'A devastating move where the Pokémon opens the ground beneath its opponent with sheer force, causing them to fall into a deep crevice.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 11,
        ]);

        \App\Models\Attack::create([
            'name' => 'Ember',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'A fiery attack where the Pokémon launches small embers or sparks at its opponent, scorching them with controlled bursts of flame. Ember can ignite targets and inflict gradual burns, making it effective for wearing down adversaries over time.',
            'is_starting' => true,
            'category_id' => 2,
            'type_id' => 7,
        ]);

        \App\Models\Attack::create([
            'name' => 'Aqua Blast',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'A swift water-based attack where the Pokémon releases a powerful stream of pressurized water from its body, resembling a water gun. Aqua Jet can drench opponents and disrupt their footing, offering both offensive and defensive advantages in battle.',
            'is_starting' => true,
            'category_id' => 2,
            'type_id' => 18,
        ]);

        \App\Models\Attack::create([
            'name' => 'Sting Strike',
            'power' => 40,
            'accuracy' => 100,
            'maxpp' => 35,
            'description' => 'A swift insect-based attack where the Pokémon delivers a precise, venomous sting. Sting Strike injects venom that can cause temporary paralysis or weakening, making it a strategic move to debilitate foes.',
            'is_starting' => true,
            'category_id' => 1,
            'type_id' => 1,
        ]);

        \App\Models\Attack::create([
            'name' => 'Dragon Roar',
            'power' => 80,
            'accuracy' => 90,
            'maxpp' => 15,
            'description' => 'A fearsome attack where the Pokémon unleashes a draconic roar. This mighty roar intimidates opponents, potentially lowering their defenses, and creates a shockwave that disrupts the battlefield for a strategic advantage.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 3,
        ]);

        \App\Models\Attack::create([
            'name' => 'Thunder Cage',
            'power' => 0,
            'accuracy' => 75,
            'maxpp' => 25,
            'description' => 'An electrifying attack where the Pokémon traps its opponent in a crackling cage of lightning. Thunder Cage deals significant damage and can paralyze the target, combining offense with debilitating effects.',
            'is_starting' => false,
            'category_id' => 3,
            'type_id' => 4,
        ]);

        \App\Models\Attack::create([
            'name' => 'Fairy Veil',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'An enchanting attack where the Pokémon envelops itself and allies in a shimmering veil of fairy energy. This mystical barrier enhances defenses and reduces the effectiveness of incoming attacks, fortifying the team and enhancing resilience.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 5,
        ]);

        \App\Models\Attack::create([
            'name' => 'Crushing Impact',
            'power' => 90,
            'accuracy' => 85,
            'maxpp' => 15,
            'description' => 'A powerful melee attack where the Pokémon delivers a devastating blow with immense force. Crushing Impact deals significant damage and can incapacitate opponents, showcasing raw power in battle.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 6,
        ]);

        \App\Models\Attack::create([
            'name' => 'Skyward Strike',
            'power' => 70,
            'accuracy' => 100,
            'maxpp' => 20,
            'description' => 'An aerial attack where the Pokémon swiftly swoops down from above, delivering a precise strike with its talons or wings. Skyward Strike combines speed and agility, allowing the Pokémon to evade counterattacks while dealing effective damage from the sky. It\'s a dynamic move that leverages aerial superiority to overwhelm opponents.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 8,
        ]);

        \App\Models\Attack::create([
            'name' => 'Phantom Grasp',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'An eerie attack where the Pokémon reaches out with spectral tendrils to grasp its opponent. This haunting maneuver can drain the target\'s energy or cause confusion, exploiting the ghostly abilities of the Pokémon.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 9,
        ]);

        \App\Models\Attack::create([
            'name' => 'Frostbite',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 25,
            'description' => 'A chilling attack where the Pokémon unleashes a freezing blast of icy shards. Frostbite envelops the target in a bitter cold, potentially slowing their movements or numbing their senses. It\'s a frosty assault that showcases the Pokémon\'s mastery over ice, delivering both damage and debilitating effects.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 12,
        ]);

        \App\Models\Attack::create([
            'name' => 'Mind Crush',
            'power' => 80,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'A psychic attack where the Pokémon unleashes a powerful surge of mental energy. Mind Crush targets the opponent\'s mind, potentially causing confusion or disorientation. It\'s a formidable psychic assault that disrupts concentration and can leave opponents vulnerable to further attacks.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 14,
        ]);

        \App\Models\Attack::create([
            'name' => 'Venomous Strike',
            'power' => 50,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'A malevolent attack where the Pokémon delivers a venomous strike, injecting a toxic substance into the opponent. This venom causes gradual damage and may weaken the target\'s stamina over time, making it an effective strategy to wear down adversaries in battle.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 15,
        ]);
    }
}
