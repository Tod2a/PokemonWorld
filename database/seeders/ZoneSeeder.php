<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Zone::create([
            'name' => 'Drakemist Peak',
            'row' => 1,
            'col' => 1,
            'imgurl' => '/storage/images/map/astronia/drakemistpeak.png',
            'description' => 'Drakemist Peak rises majestically, shrouded in swirling mists that catch the light like iridescent dragon scales. This mystical mountain is home to elusive dragons, their forms occasionally glimpsed amidst the shadows of ancient caves and crevices. Travelers are greeted by the haunting calls echoing through the valleys, blending with the whispers of legends passed down by local villagers. Drakemist Peak offers adventurers a chance to explore rugged cliffs and secret chambers where dragon relics are said to lie hidden, awaiting discovery amidst the ethereal beauty of this enigmatic realm.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Sylvanwood City',
            'row' => 1,
            'col' => 2,
            'imgurl' => '/storage/images/map/astronia/sylvanwoodcity.png',
            'description' => 'Sylvanwood City nestles deep within a lush forest, its rustic charm blending seamlessly with the verdant surroundings. The city\'s architecture harmonizes with nature, featuring wooden structures adorned with vines and blooming flowers. Visitors are greeted by the sweet aroma of pine and the melodic chirping of woodland birds. Cobblestone paths wind through the city, leading to quaint cafes tucked beneath canopies of ancient trees and artisanal shops showcasing handcrafted wooden goods. Sylvanwood City is a haven for artists, scholars, and nature enthusiasts alike, offering a tranquil retreat amidst the vibrant greenery of the forest.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Whispering Grove',
            'row' => 1,
            'col' => 3,
            'imgurl' => '/storage/images/map/astronia/whisperinggrove.png',
            'description' => 'Whispering Grove envelops travelers in a serene embrace, its ancient trees towering overhead like silent sentinels. Sunlight filters through the canopy, casting dappled shadows on moss-covered paths that wind through the heart of this enchanted forest. The air is alive with the murmurs of rustling leaves and the occasional playful giggle of hidden woodland creatures. Wanderers may chance upon sparkling streams meandering through clearings adorned with delicate ferns and wildflowers. Whispering Grove beckons adventurers to explore its tranquil depths, where each step reveals a new wonder and the timeless magic of nature unfolds.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Crimson Summit',
            'row' => 1,
            'col' => 4,
            'imgurl' => '/storage/images/map/astronia/crimsonsummit.png',
            'description' => 'Crimson Summit stands as the ultimate challenge at the pinnacle of your Pokémon journey. Perched atop a rugged, fiery plateau, this formidable arena is where elite trainers from across the region gather to test their skills in epic battles. The air crackles with anticipation as you ascend the steep, winding path, passing by ancient monuments and statues honoring legendary trainers of old. Flames dance in the volcanic vents that dot the landscape, casting an ominous glow over the battlefield where champions are forged. Crimson Summit promises not only fierce competition but also breathtaking views of the sprawling region below, a testament to the trials and triumphs that define your quest to become Pokémon Master.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Zephyr Plains',
            'row' => 2,
            'col' => 1,
            'imgurl' => '/storage/images/map/astronia/zephyrplains.png',
            'description' => 'Welcome to Zephyr Plains, where the wind dances freely across endless fields of golden grass. This expansive plain stretches as far as the eye can see, its undulating terrain adorned with wildflowers that sway in harmony with the gentle breeze. The air is alive with the soothing melody of rustling leaves and the distant calls of soaring birds. Travelers can feel the exhilarating rush of wind as they traverse the open expanse, where occasional clusters of ancient oak trees offer shade and refuge. Zephyr Plains is a haven for Pokémon and trainers alike, its serene beauty and constant movement of wind creating a serene atmosphere ideal for reflection and exploration.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Tempest Lake',
            'row' => 2,
            'col' => 2,
            'imgurl' => '/storage/images/map/astronia/tempestlake.png',
            'description' => 'Tempest Lake broods amidst rugged terrain, its dark waters swirling with mystery and danger. Surrounded by jagged cliffs and gnarled trees, the lake is shrouded in perpetual mist, hiding its murky depths. Legends speak of powerful currents and elusive Pokémon within, making it a perilous yet enticing destination for brave adventurers. Lightning occasionally flashes across the sky, illuminating the turbulent surface and adding to the ominous ambiance of this foreboding waterbody.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Mirage Sands',
            'row' => 2,
            'col' => 3,
            'imgurl' => '/storage/images/map/astronia/miragesands.png',
            'description' => 'Mirage Sands stretches endlessly under the scorching desert sun, its dunes shifting with the whims of the wind. The barren landscape is dotted with towering rock formations and sparse, hardy vegetation struggling to survive in the harsh environment. Heat shimmers create illusions of water in the distance, deceiving travelers who dare to venture across its treacherous expanse. Sandstorms occasionally whip through the air, erasing tracks and revealing ancient fossils and buried artifacts. Mirage Sands is a test of endurance and navigation skills, where only the most resilient trainers and Pokémon can withstand the relentless heat and uncover its secrets buried beneath the shifting sands.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Ancient Ruins',
            'row' => 2,
            'col' => 4,
            'imgurl' => '/storage/images/map/astronia/ancientruins.png',
            'description' => 'Eldritch Ruins stand silently amidst overgrown vegetation, their weathered stones hinting at a forgotten civilization\'s grandeur. Moss-covered pillars and crumbling archways weave tales of ancient rites and mysteries. Shafts of sunlight pierce through tangled vines, illuminating intricate carvings and relics hidden within the shadows. Whispers of a lost history echo through the still air, drawing curious adventurers seeking knowledge and artifacts of a bygone era. Eldritch Ruins are a haunting reminder of the past\'s power and the secrets waiting to be unearthed by those brave enough to delve into their depths.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Enchanted Castle',
            'row' => 3,
            'col' => 1,
            'imgurl' => '/storage/images/map/astronia/enchantedcastle.png',
            'description' => 'Enchanted Citadel rises majestically amid lush gardens and shimmering fountains, its turrets reaching toward the heavens. Within its ancient walls, corridors echo with tales of royal splendor and mystical enchantments. Each room holds secrets whispered by the wind through stained glass windows and ornate tapestries. The air is imbued with magic, drawing adventurers to uncover its hidden chambers and the legendary Pokémon said to roam its hallowed halls.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Cascade Serenity',
            'row' => 3,
            'col' => 2,
            'imgurl' => '/storage/images/map/astronia/cascadeserenity.png',
            'description' => 'Cascade Serenity Fields are a tranquil expanse where gentle waterfalls cascade into crystal-clear pools, creating a symphony of soothing sounds. Lush green plains stretch out beneath a vast sky, dotted with colorful wildflowers that sway in the breeze. Sunlight filters through the canopy of ancient trees, casting dappled shadows on paths that wind through this idyllic landscape. Pokémon and travelers alike find solace in the serene beauty of Cascade Serenity Fields, a haven where peace reigns undisturbed and the harmony of nature flourishes.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Misty Peak',
            'row' => 3,
            'col' => 3,
            'imgurl' => '/storage/images/map/astronia/mistypeak.png',
            'description' => 'The Misty Peak Range towers majestically over the land, its slopes draped in emerald forests that give way to rugged cliffs and cascading waterfalls. Clouds weave through the peaks, casting fleeting shadows over lush valleys and serene alpine lakes. Hiking trails wind up the mountainside, offering stunning panoramic views of the surrounding countryside and glimpses of Pokémon adapted to the high-altitude terrain. Misty Peak Range is a sanctuary of natural wonder, where the harmony of mist, rock, and greenery creates a timeless landscape of awe-inspiring beauty and tranquil solitude.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Verdant Plains',
            'row' => 3,
            'col' => 4,
            'imgurl' => '/storage/images/map/astronia/verdantplains.png',
            'description' => 'Greenfield Plains sprawl under an expansive sky, their gentle slopes adorned with vibrant green grass. Soft sunlight bathes the landscape, casting long shadows from scattered oak trees. Small streams wind through the terrain, providing water to a variety of Pokémon and wildlife. The air is filled with the scent of wildflowers and the gentle hum of insects. Greenfield Plains offer a serene escape, where visitors can immerse themselves in the peaceful beauty of untouched nature.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Emerald Canopy',
            'row' => 4,
            'col' => 1,
            'imgurl' => '/storage/images/map/astronia/emeraldcanopy.png',
            'description' => 'Emerald Canopy is a dense jungle where sunlight filters through a verdant canopy of towering trees. Lush ferns carpet the forest floor, concealing ancient ruins and sparkling streams that meander through the verdant undergrowth. Exotic Pokémon flit among vibrant blooms and hanging vines, their calls echoing through the vibrant foliage. The air is thick with humidity and the earthy scent of rich soil. Emerald Canopy beckons adventurers to unravel its secrets amidst the primal splendor of this untamed jungle.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Verdale Village',
            'row' => 4,
            'col' => 2,
            'imgurl' => '/storage/images/map/astronia/verdalevillage.png',
            'description' => 'A quaint starting village nestled amid rolling hills and verdant meadows. Cozy cottages with thatched roofs line cobblestone streets, leading to a central square adorned with a bubbling fountain. Residents tend to gardens brimming with colorful flowers, creating a serene atmosphere that welcomes new trainers seeking their first Pokémon companion.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Ember Sands',
            'row' => 4,
            'col' => 3,
            'imgurl' => '/storage/images/map/astronia/embersands.png',
            'description' => 'Ember Sands stretches like an ocean of orange-hued sand, where undulating dunes gleam under the blazing sun. Wind-weathered rocks punctuate the landscape, bearing witness to ancient times when this region was an active desert. Sparse flora adapted to extreme heat manages to thrive here, while rare Pokémon hide among crevices and hidden oases. The amber sky stretches endlessly above this arid environment, creating a scene both breathtaking and unforgiving in the world of your Pokémon game.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'Market Square',
            'row' => 4,
            'col' => 4,
            'imgurl' => '/storage/images/map/astronia/marketsquare.png',
            'description' => 'Market Square bustles with life as the heart of the region\'s largest city. Lively stalls brim with exotic goods and fresh produce, while street performers entertain crowds beneath the shade of towering, centuries-old trees. Ornate architecture surrounds the square, with bustling cafes and shops offering everything from artisan crafts to high-tech gadgets. The air is filled with the aroma of street food and the chatter of locals and tourists alike, making Market Square a vibrant hub of commerce and culture.',
            'map_id' => 1
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon1',
            'row' => 1,
            'col' => 1,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon2',
            'row' => 1,
            'col' => 2,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon3',
            'row' => 1,
            'col' => 3,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon4',
            'row' => 1,
            'col' => 4,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon5',
            'row' => 2,
            'col' => 1,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon6',
            'row' => 2,
            'col' => 2,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon7',
            'row' => 2,
            'col' => 3,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon8',
            'row' => 2,
            'col' => 4,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon9',
            'row' => 3,
            'col' => 1,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon10',
            'row' => 3,
            'col' => 2,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon11',
            'row' => 3,
            'col' => 3,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon12',
            'row' => 3,
            'col' => 4,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon13',
            'row' => 4,
            'col' => 1,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon14',
            'row' => 4,
            'col' => 2,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon15',
            'row' => 4,
            'col' => 3,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);

        \App\Models\Zone::create([
            'name' => 'coming soon16',
            'row' => 4,
            'col' => 4,
            'imgurl' => '/storage/images/map/zephyria/comingsoon.png',
            'description' => 'coming soon',
            'map_id' => 2,
        ]);
    }
}
