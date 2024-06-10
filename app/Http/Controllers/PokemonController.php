<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::paginate(12);

        return inertia('Guest/Pokemon/index', ['pokemons' => $pokemons]);
        
        //return inertia('Welcome');
    }
}
