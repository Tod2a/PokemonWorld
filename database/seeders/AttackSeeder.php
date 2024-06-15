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

        \App\Models\Attack::create([
            'name' => 'Water Pulse',
            'power' => 60,
            'accuracy' => 100,
            'maxpp' => 20,
            'description' => 'The user attacks the target with a pulsing blast of water. It may also confuse the target, making it difficult for them to concentrate on the battle.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 18,
        ]);

        \App\Models\Attack::create([
            'name' => 'Hydro Pump',
            'power' => 110,
            'accuracy' => 80,
            'maxpp' => 5,
            'description' => 'The user blasts the target with a huge volume of water launched under great pressure. It’s a highly powerful attack, though it can miss its mark.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 18,
        ]);

        \App\Models\Attack::create([
            'name' => 'Aqua Tail',
            'power' => 90,
            'accuracy' => 90,
            'maxpp' => 10,
            'description' => 'The user attacks by swinging its tail as if it were a vicious wave in a raging storm. This move can strike with impressive power.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 18,
        ]);

        \App\Models\Attack::create([
            'name' => 'Solar Beam',
            'power' => 120,
            'accuracy' => 100,
            'maxpp' => 10,
            'description' => 'In this two-turn attack, the user gathers light, then blasts a bundled beam on the next turn.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Razor Leaf',
            'power' => 55,
            'accuracy' => 95,
            'maxpp' => 25,
            'description' => 'Sharp-edged leaves are launched to slash at opposing Pokémon. Critical hits land more easily.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 10,
        ]);

        \App\Models\Attack::create([
            'name' => 'Flamethrower',
            'power' => 90,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'The target is scorched with an intense blast of fire. This may also leave the target with a burn.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 7,
        ]);

        \App\Models\Attack::create([
            'name' => 'Fire Blast',
            'power' => 110,
            'accuracy' => 85,
            'maxpp' => 5,
            'description' => 'The target is attacked with an intense blast of all-consuming fire. This may also leave the target with a burn.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 7,
        ]);

        \App\Models\Attack::create([
            'name' => 'Flare Blitz',
            'power' => 120,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'The user cloaks itself in fire and charges the target. The user sustains serious damage and may leave the target burned.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 7,
        ]);

        \App\Models\Attack::create([
            'name' => 'Dark Pulse',
            'power' => 80,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'The user releases a horrible aura imbued with dark thoughts. This may also make the target flinch.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Night Slash',
            'power' => 70,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'The user slashes the target the instant an opportunity arises. Critical hits land more easily.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 2,
        ]);

        \App\Models\Attack::create([
            'name' => 'Air Slash',
            'power' => 75,
            'accuracy' => 95,
            'maxpp' => 15,
            'description' => 'The user attacks with a blade of air that slices even the sky. This may also make the target flinch.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 8,
        ]);

        \App\Models\Attack::create([
            'name' => 'Brave Bird',
            'power' => 120,
            'accuracy' => 100,
            'maxpp' => 15,
            'description' => 'The user tucks in its wings and charges from a low altitude. The user also takes serious damage.',
            'is_starting' => false,
            'category_id' => 1,
            'type_id' => 8,
        ]);

        \App\Models\Attack::create([
            'name' => 'Ice Beam',
            'power' => 90,
            'accuracy' => 100,
            'maxpp' => 10,
            'description' => 'The target is struck with an icy-cold beam of energy. This may also leave the target frozen.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 12,
        ]);

        \App\Models\Attack::create([
            'name' => 'Blizzard',
            'power' => 110,
            'accuracy' => 70,
            'maxpp' => 5,
            'description' => 'A howling blizzard is summoned to strike opposing Pokémon. This may also leave the opposing Pokémon frozen.',
            'is_starting' => false,
            'category_id' => 2,
            'type_id' => 12,
        ]);
    }
}
