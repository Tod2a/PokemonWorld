<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attaque;
use App\Models\AttaqueLevelPokemon;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class AttaquePokemonController extends Controller
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

        $attacks = Attaque::with(['type', 'category']);

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

        return inertia('Admin/AttaquePokemon/create', ['pokemon' => $pokemon, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $attackPokemon = AttaqueLevelPokemon::with(['attaque', 'pokemon'])->findOrFail($id);
        return inertia('Admin/AttaquePokemon/edit', ['attack' => $attackPokemon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'level' => 'required|min:1|max:100',
        ]);

        $attackPokemon = AttaqueLevelPokemon::findOrFail($id);

        $attackPokemon->level = $request['level'];

        $attackPokemon->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attackpokemon = AttaqueLevelPokemon::findOrFail($id);
        $attackpokemon->delete();
    }
}
