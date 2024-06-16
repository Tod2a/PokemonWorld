<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evolution;
use App\Models\Pokemon;
use App\Rules\NoEvolutionConflict;
use App\Rules\NoPrevolutionConflict;
use Illuminate\Http\Request;

class EvolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $pokemons = Pokemon::with(['type1', 'type2']);

        if ($query) {
            $pokemons->where('name', 'like', $query . '%');
        }

        $result = $pokemons->paginate(12);

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return inertia('Admin/Evolution/create', ['pokemon' => $pokemon]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $evolution = Evolution::make();

        if ($request[('type')] === 2) {

            $validated = $request->validate([
                'pokemon' => ['required', 'exists:pokemon,id', new NoPrevolutionConflict()],
                'type' => 'required|integer|in:1,2',
                'level' => 'required|integer|min:1|max:100',
                'evo' => ['required', 'exists:pokemon,id', new NoEvolutionConflict()],
            ]);

            $evolution->prevolution_id = $validated['pokemon'];
            $evolution->evolution_id = $validated['evo'];
        } else {
            $validated = $request->validate([
                'pokemon' => ['required', 'exists:pokemon,id', new NoEvolutionConflict()],
                'type' => 'required|integer|in:1,2',
                'level' => 'required|integer|min:1|max:100',
                'evo' => ['required', 'exists:pokemon,id', new NoPrevolutionConflict()],
            ]);

            $evolution->prevolution_id = $validated['evo'];
            $evolution->evolution_id = $validated['pokemon'];
        }

        $evolution->level = $validated['level'];
        $evolution->save();
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
        $evolution = Evolution::with(['prevolutionPokemon', 'evolutionPokemon'])->findOrFail($id);
        return inertia('Admin/Evolution/edit', ['evolution' => $evolution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'level' => 'required|min:1|max:100',
        ]);

        $evolution = Evolution::findOrFail($id);
        $evolution->level = $request['level'];
        $evolution->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evolution = Evolution::findOrFail($id);
        $evolution->delete();
    }
}
