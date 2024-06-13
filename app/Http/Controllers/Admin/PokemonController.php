<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;
use App\Models\Attaque;
use App\Models\AttaqueLevelPokemon;
use App\Models\Pokemon;
use App\Models\Type;
use Database\Seeders\AttaqueSeeder;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::with(['type1', 'type2'])->paginate(12);

        return inertia('Admin/Pokemon/index', ['pokemon' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $attacks = Attaque::where('is_starting', true)->get();
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
                if ($attack > 0 && $level !== null) {
                    $attaquePokemon = AttaqueLevelPokemon::make();
                    $attaquePokemon->pokemon_id = $pokemon->id;
                    $attaquePokemon->attaque_id = $attack;
                    $attaquePokemon->level = $level;
                    $attaquePokemon->save();
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

        return inertia('Admin/Pokemon/edit', ['pokemon' => $pokemon, 'types' => $types, 'attacks' => $pokemonAttacks]);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
    }
}
