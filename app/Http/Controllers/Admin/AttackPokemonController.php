<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attack;
use App\Models\AttackLevelPokemon;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttackPokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * seaching for the attacks list
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type');

        $attacks = Attack::with(['type', 'category']);

        if ($query) {
            $attacks->where('name', 'like', $query . '%');
        }

        if ($type) {
            $attacks->whereHas('type', function ($query) use ($type) {
                $query->where('name', $type);
            });
        }

        $result = $attacks->paginate(12);

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $types = Type::all();

        return inertia('Admin/AttackPokemon/create', ['pokemon' => $pokemon, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pokemon' => 'required|min:1',
            'attack' => 'required|min:1',
            'level' => 'required|integer|min:1|max:100',
        ]);

        $uniqueRule = Rule::unique('attack_level_pokemon')
            ->where('pokemon_id', $request->pokemon)
            ->where('attack_id', $request->attack)
            ->where('level', $request->level);

        $request->validate([
            'level' => $uniqueRule,
        ], [
            'level.unique' => 'this combinaison Pokemon/Attack/Level already exist.',
        ]);


        $attackPokemon = AttackLevelPokemon::make();
        $attackPokemon->attack_id = $request['attack'];
        $attackPokemon->pokemon_id = $request['pokemon'];
        $attackPokemon->level = $request['level'];
        $attackPokemon->save();
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
        $attackPokemon = AttackLevelPokemon::with(['attack', 'pokemon'])->findOrFail($id);
        return inertia('Admin/AttackPokemon/edit', ['attack' => $attackPokemon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'level' => 'required|min:1|max:100',
        ]);

        $attackPokemon = AttackLevelPokemon::findOrFail($id);

        $attackPokemon->level = $request['level'];

        $attackPokemon->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attackpokemon = AttackLevelPokemon::findOrFail($id);
        $attackpokemon->delete();
    }
}
