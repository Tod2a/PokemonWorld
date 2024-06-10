<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return inertia('Guest/Pokemon/index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $pokemons = Pokemon::with(['type1', 'type2'])
                ->where('name', 'like', $query . '%')
                ->paginate(12);
        } else {
            $pokemons = Pokemon::with(['type1', 'type2'])->paginate(12);
        }

        return response($pokemons);
    }
}
