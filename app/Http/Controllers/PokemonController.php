<?php

namespace App\Http\Controllers;

use App\Models\AttaqueLevelPokemon;
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
        $pokemon = Pokemon::with(['type1', 'type2', 'resistances', 'weaknesses'])->findOrFail($id);
        $types = Type::all();
        $pokemonAttacks = AttaqueLevelPokemon::where('pokemon_id', $id)
            ->with(['attaque', 'attaque.category', 'attaque.type'])
            ->get()
            ->map(function ($pokemonAttaque) {
                return [
                    'attaque' => $pokemonAttaque->attaque,
                    'level' => $pokemonAttaque->level,
                ];
            });

        return inertia('Guest/Pokemon/show', ['pokemon' => $pokemon, 'pokemonAttaques' => $pokemonAttacks, 'types' => $types]);
    }
}
