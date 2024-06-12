<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::paginate(12);

        return inertia('Admin/Pokemon/index', ['pokemon' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return inertia('Admin/Pokemon/create', ['types' => $types]);
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
        $pokemon->type2_id = $request->validated()['type2'];

        if ($request->hasFile('imgurl')) {
            $path = $request->file('imgurl')->store('images/pokemon', 'public');
            $pokemon->imgurl = $path;
        }

        //if ($request->hasFile('imgurl')) {
        //$file = $request->file('imgurl');
        //$filename = time() . '' . $file->getClientOriginalName();
        //$destinationPath = public_path('storage/images/pokemon');
        //$file->move($destinationPath, $filename);
        //$pokemon->img_path = 'storage/images/pokemon' . $filename;
        //}


        $pokemon->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
