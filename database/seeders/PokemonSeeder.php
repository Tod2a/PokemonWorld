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
            'description' => 'Floroue is a small Pokémon resembling a young wolf. Its coat is made up of green petals and blossoming leaves. Its eyes shine with a curious gleam, and its energy overflows as it explores its surroundings.',
            'hp' => 50,
            'att' => 42,
            'def' => 75,
            'attspe' => 60,
            'defspe' => 50,
            'vit' => 50,
            'size' => 60,
            'weight' => 3400,
            'type1_id' => 10,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/floroue.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Folunarque',
            'description' => 'Folunarque is the evolved form of Floroue. His stature has grown to resemble that of a full-grown wolf, with dark fur interspersed with emerald green petals. His eyes gleam with a mysterious glow, and floral patterns adorn his body. Folunarque moves silently through the woods, mastering the shadows to protect his territory.',
            'hp' => 74,
            'att' => 56,
            'def' => 78,
            'attspe' => 95,
            'defspe' => 56,
            'vit' => 69,
            'size' => 96,
            'weight' => 10750,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => 'storage/images/pokemon/folunarque.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Noctoflore',
            'description' => 'Noctoflore is the final form of Floroue, an imposing creature that combines the power of a wolf with the magic of nature. Her coat is a dark blend of black and green, adorned with luminous floral patterns. Her eyes shine with an enigmatic glow, capable of plunging enemies into an illusion of eternal night. Noctoflore is the guardian of the dark forests, guarding the balance between light and darkness. Translated with DeepL.com (free version)',
            'hp' => 96,
            'att' => 80,
            'def' => 96,
            'attspe' => 110,
            'defspe' => 63,
            'vit' => 96,
            'size' => 111,
            'weight' => 26200,
            'type1_id' => 10,
            'type2_id' => 2,
            'imgurl' => 'storage/images/pokemon/noctoflore.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Emberaptor',
            'description' => 'Emberaptor is a small firebird with glowing feathers and piercing eyes like glowing embers. Its body is agile and light, enabling it to fly gracefully through the skies. Its tail is adorned with dancing flames, symbolizing its fiery, passionate nature.',
            'hp' => 45,
            'att' => 51,
            'def' => 67,
            'attspe' => 68,
            'defspe' => 35,
            'vit' => 70,
            'size' => 86,
            'weight' => 5260,
            'type1_id' => 7,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/emberaptor.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Infernalynx',
            'description' => 'Infernalynx is the evolved form of Emberaptor. His size has increased considerably, and his feathers are now enveloped in intense flames. His eyes are fierce and determined, reflecting his inner strength and unshakeable will. Infernalynx is ready to challenge anyone who dares threaten his territory.',
            'hp' => 63,
            'att' => 55,
            'def' => 76,
            'attspe' => 85,
            'defspe' => 36,
            'vit' => 85,
            'size' => 126,
            'weight' => 20560,
            'type1_id' => 7,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/infernalynx.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Phoenixiraptor',
            'description' => 'Phoenixiraptor is the final form of Emberaptor, a majestic creature that embodies the power of fire and the freedom of the sky. His wings are immense, covered with flaming feathers that sparkle in the sunlight. His body is enveloped in eternal flames, giving him an aura of pure energy. Phoenixiraptor reigns supreme in the heavens, symbolizing resurrection and rebirth.',
            'hp' => 78,
            'att' => 58,
            'def' => 86,
            'attspe' => 113,
            'defspe' => 45,
            'vit' => 112,
            'size' => 180,
            'weight' => 31200,
            'type1_id' => 7,
            'type2_id' => 8,
            'imgurl' => 'storage/images/pokemon/phoenixiraptor.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Aquadon',
            'description' => 'Glacierippo is a Water/Ice type Pokémon, resembling a robust hippopotamus adapted to icy environments. Its skin is a cool, pale blue, smooth to the touch, and adorned with small ice crystals that glisten in the light. Proudly displayed on its back are several clusters of icy stalactites, shimmering with a frosty sheen. Its large, round eyes exude a gentle, curious gleam, complemented by a playful smile that reveals pearly-white tusks.',
            'hp' => 76,
            'att' => 65,
            'def' => 87,
            'attspe' => 36,
            'defspe' => 71,
            'vit' => 36,
            'size' => 120,
            'weight' => 10200,
            'type1_id' => 18,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/aquadon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Glacierippo',
            'description' => 'Cryostodon is the formidable final evolution of Aquadon and Glacierippo, a majestic hippopotamus Pokémon infused with Ice and Water elements. It boasts a towering, muscular build covered in shimmering icy blue fur, adorned with glacial patterns across its body. Large, glowing ice formations adorn its back, emitting a cold, ethereal light. With sharp, piercing eyes and a serene demeanor, Cryostodon exudes ancient wisdom and power as it effortlessly navigates icy realms.',
            'hp' => 95,
            'att' => 74,
            'def' => 98,
            'attspe' => 36,
            'defspe' => 78,
            'vit' => 40,
            'size' => 142,
            'weight' => 18200,
            'type1_id' => 18,
            'type2_id' => 12,
            'imgurl' => 'storage/images/pokemon/glacierippo.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Cryostodon',
            'description' => 'The ultimate form of Aquadon, is a colossal beast that dominates the frozen waters of the Arctic. Despite its immense size, its silhouette retains the recognizable shape of a hippopotamus, albeit now entirely covered in ice. Its massive body emits an icy aura that makes even the bravest shiver. Its tusks, once rounded and playful, are now fearsome blades of ice capable of slicing through anything. Cryostodon is the guardian of the frozen seas, a force of nature not to be underestimated.',
            'hp' => 124,
            'att' => 86,
            'def' => 114,
            'attspe' => 45,
            'defspe' => 96,
            'vit' => 51,
            'size' => 236,
            'weight' => 114200,
            'type1_id' => 18,
            'type2_id' => 12,
            'imgurl' => 'storage/images/pokemon/cryostodon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Earthop',
            'description' => 'Earthop is a Ground-type Pokémon with a soft, earthy brown coat. It has large, pointed ears and mischievous eyes that gleam with intelligence. Earthop digs complex burrows in the ground to hide and protect itself. Its snout is adorned with a small white star, and its strong paws are designed for rapid digging. Agile and quick, Earthop can leap on its hind legs to evade predators.',
            'hp' => 60,
            'att' => 70,
            'def' => 68,
            'attspe' => 32,
            'defspe' => 47,
            'vit' => 86,
            'size' => 60,
            'weight' => 4000,
            'type1_id' => 11,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/earthop.jpg',
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Aerohare',
            'description' => 'Aerohare is the majestic evolution of Earthop. Its ears have grown larger and developed membranes, allowing it to glide gracefully through the air. Its fur is lighter, with shades of beige and white. Aerohare enjoys perching at high altitudes, observing the world below with keen interest.',
            'hp' => 82,
            'att' => 86,
            'def' => 72,
            'attspe' => 41,
            'defspe' => 49,
            'vit' => 101,
            'size' => 90,
            'weight' => 6000,
            'type1_id' => 11,
            'type2_id' => 8,
            'imgurl' => 'storage/images/pokemon/aerohare.jpg',
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Crawbug',
            'description' => 'Crawbug is a playful Bug-type Pokémon, resembling a small caterpillar. It has a vibrant green body with tiny orange spots and a cheerful face. Crawbug’s large, expressive eyes are always filled with curiosity as it explores its surroundings. Its antennae twitch constantly, sensing the world around it. Crawbug loves munching on leaves and often gets into mischief.',
            'hp' => 40,
            'att' => 51,
            'def' => 38,
            'attspe' => 62,
            'defspe' => 47,
            'vit' => 70,
            'size' => 30,
            'weight' => 1000,
            'type1_id' => 1,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/crawbug.jpg',
        ]);

        \App\Models\Pokemon::create([
            'name' => 'cocoonix',
            'description' => 'Cocoonix is the evolved form of Crawbug. It encases itself in a sturdy, oval-shaped cocoon, which is a mix of earthy browns and greens, mimicking tree bark. While in this form, Cocoonix is immobile, focusing its energy on the transformation process. The only sign of life is the occasional twitch of its outer shell. Despite its stationary nature, Cocoonix’s inner development is rapid and intense.',
            'hp' => 58,
            'att' => 61,
            'def' => 46,
            'attspe' => 71,
            'defspe' => 48,
            'vit' => 54,
            'size' => 50,
            'weight' => 5000,
            'type1_id' => 1,
            'type2_id' => null,
            'imgurl' => 'storage/images/pokemon/cocoonix.jpg',
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Flitterfly',
            'description' => 'Flitterfly is the final evolution of Crawbug, emerging beautifully from Cocoonix. It is a stunning Bug/Fairy-type Pokémon with delicate, iridescent wings that shimmer in all colors of the rainbow. Flitterfly’s body is slender and elegant, adorned with small, sparkling patterns. Its eyes are bright and kind, exuding a calming aura. Flitterfly flutters gracefully through the air, spreading fairy dust that promotes growth and heals the plants it encounters.',
            'hp' => 71,
            'att' => 78,
            'def' => 68,
            'attspe' => 99,
            'defspe' => 85,
            'vit' => 110,
            'size' => 50,
            'weight' => 5000,
            'type1_id' => 1,
            'type2_id' => 5,
            'imgurl' => 'storage/images/pokemon/flitterfly.jpg',
        ]);
    }
}
