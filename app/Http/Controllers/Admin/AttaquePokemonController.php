<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attaque;
use App\Models\AttaqueLevelPokemon;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
