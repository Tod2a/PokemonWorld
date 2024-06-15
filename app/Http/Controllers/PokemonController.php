<?php

namespace App\Http\Controllers;

use App\Models\AttackLevelPokemon;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return inertia('Guest/Pokemon/index', ['types' => $types]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type');

        $pokemons = Pokemon::with(['type1', 'type2']);

        if ($query) {
            $pokemons->where('name', 'like', $query . '%');
        }

        if ($type) {
            $pokemons->where(function ($query) use ($type) {
                $query->whereHas('type1', function ($query) use ($type) {
                    $query->where('name', $type);
                })->orWhereHas('type2', function ($query) use ($type) {
                    $query->where('name', $type);
                });
            });
        }

        $result = $pokemons->paginate(12);

        return response()->json($result);
    }

    public function show($id)
    {
        $pokemon = Pokemon::with(['type1', 'type2', 'resistances', 'weaknesses', 'evolution', 'prevolution', 'evolution.prevolutionPokemon', 'evolution.evolutionPokemon', 'prevolution.prevolutionPokemon', 'prevolution.evolutionPokemon'])->findOrFail($id);
        $types = Type::all();
        $pokemonAttacks = AttackLevelPokemon::where('pokemon_id', $id)
            ->with(['attack', 'attack.category', 'attack.type'])
            ->get()
            ->map(function ($pokemonAttack) {
                return [
                    'attack' => $pokemonAttack->attack,
                    'level' => $pokemonAttack->level,
                ];
            })
            ->sortBy('level');
        $pokemon->imgurl = asset($pokemon->imgurl);
        return inertia('Guest/Pokemon/show', ['pokemon' => $pokemon, 'pokemonAttacks' => $pokemonAttacks->values()->all(), 'types' => $types]);
    }
}
