<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::with(['type1', 'type2'])->paginate(12);

        return inertia('Guest/Pokemon/index', ['pokemons' => $pokemons]);
    }
}
