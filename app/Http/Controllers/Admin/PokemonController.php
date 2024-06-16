<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;
use App\Models\Attack;
use App\Models\AttackLevelPokemon;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return inertia('Admin/Pokemon/index', ['types' => $types]);
    }

    /**
     * Function to search pokemon
     */
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


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $attacks = Attack::where('is_starting', true)->get();
        return inertia('Admin/Pokemon/create', ['types' => $types, 'attacks' => $attacks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonCreateRequest $request)
    {

        $pokemon = Pokemon::make();
        $pokemon->name = $request->validated()['name'];
        $pokemon->description = $request->validated()['description'];
        $pokemon->hp = $request->validated()['hp'];
        $pokemon->att = $request->validated()['att'];
        $pokemon->def = $request->validated()['def'];
        $pokemon->attspe = $request->validated()['attspe'];
        $pokemon->defspe = $request->validated()['defspe'];
        $pokemon->vit = $request->validated()['vit'];
        $pokemon->size = $request->validated()['size'];
        $pokemon->weight = $request->validated()['weight'];
        $pokemon->type1_id = $request->validated()['type1'];
        if ($request['type1'] !== $request['type2']) {
            $pokemon->type2_id = $request->validated()['type2'];
        }

        if ($request->hasFile('imgurl')) {
            $path = $request->file('imgurl')->store('images/pokemon', 'public');
            $pokemon->imgurl = 'storage/' . $path;
        }

        $pokemon->save();

        if ($request['resistances'] !== null) {
            foreach ($request->validated()['resistances'] as $resistance) {
                $pokemon->resistances()->sync([$resistance], false);
            }
        }

        if ($request['weaknesses'] !== null) {
            foreach ($request->validated()['weaknesses'] as $weakness) {
                $pokemon->weaknesses()->sync([$weakness], false);
            }
        }

        if ($request['attacks'] !== null) {
            foreach ($request['attacks'] as $attack => $level) {
                if ($attack > 0 && $level !== null && $level < 100) {
                    $attackPokemon = AttackLevelPokemon::make();
                    $attackPokemon->pokemon_id = $pokemon->id;
                    $attackPokemon->attack_id = $attack;
                    $attackPokemon->level = $level;
                    $attackPokemon->save();
                }
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
                    'id' => $pokemonAttack->id,
                ];
            });

        return inertia('Admin/Pokemon/edit', ['pokemon' => $pokemon, 'types' => $types, 'attacks' => $pokemonAttacks]);
    }

    public function edit_image(Pokemon $pokemon)
    {
        return inertia('Admin/Pokemon/editimg', ['pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonUpdateRequest $request, Pokemon $pokemon)
    {
        $pokemon->name = $request->validated()['name'];
        $pokemon->description = $request->validated()['description'];
        $pokemon->hp = $request->validated()['hp'];
        $pokemon->att = $request->validated()['att'];
        $pokemon->def = $request->validated()['def'];
        $pokemon->attspe = $request->validated()['attspe'];
        $pokemon->defspe = $request->validated()['defspe'];
        $pokemon->vit = $request->validated()['vit'];
        $pokemon->size = $request->validated()['size'];
        $pokemon->weight = $request->validated()['weight'];
        $pokemon->type1_id = $request->validated()['type1'];
        if ($request['type1'] !== $request['type2']) {
            $pokemon->type2_id = $request->validated()['type2'];
        }

        $pokemon->save();

        if (isset($request['resistances'])) {
            $pokemon->resistances()->sync($request['resistances']);
        } else {
            $pokemon->resistances()->detach();
        }

        if (isset($request['weaknesses'])) {
            $pokemon->weaknesses()->sync($request['weaknesses']);
        } else {
            $pokemon->weaknesses()->detach();
        }
    }

    public function update_image(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'url' => 'required|image|mimes:jpg,png|max:2048',
        ]);

        if ($request->hasFile('url')) {
            $path = $request->file('url')->store('images/pokemon', 'public');
            $pokemon->imgurl = 'storage/' . $path;
            $pokemon->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
    }
}
