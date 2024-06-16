<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attack;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use LengthException;

class AdminController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        $pokemoncount = count($pokemon);

        $attacks = Attack::all();
        $attackscount = count($attacks);
        return Inertia::render('Admin/index', ['pokemon' => $pokemoncount, 'attacks' => $attackscount]);
    }
}
