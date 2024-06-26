<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            TypeSeeder::class,
            PokemonSeeder::class,
            PokemonTypeSeeder::class,
            CategorySeeder::class,
            AttackSeeder::class,
            AttackPokemonSeeder::class,
            EvolutionSeeder::class,
            MapSeeder::class,
            ZoneSeeder::class,
            PokemonZoneSeeder::class,
        ]);
    }
}
