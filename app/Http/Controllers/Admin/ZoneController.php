<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function create(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $zones = Zone::with(['map'])->paginate(12);
        return inertia('Admin/Zone/create', ['pokemon' => $pokemon, 'zones' => $zones]);
    }

    public function store(Request $request, string $id)
    {
        $pokemonid = $request['pokemon'];
        $pokemon = Pokemon::findOrFail($pokemonid);

        $pokemon->zones()->attach($id);
    }

    public function destroy(string $zoneId, string $pokemonId)
    {
        $pokemon = Pokemon::findOrFail($pokemonId);

        $pokemon->zones()->detach($zoneId);
    }
}
