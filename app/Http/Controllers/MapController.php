<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Zone;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        $zones = Zone::all();
        return inertia('Guest/Map/index', ['maps' => $maps, 'zones' => $zones]);
    }

    public function search(Request $request)
    {
        dd($request);
        $map = $request->input('map');
        dd($map);

        $zones = Zone::with(['map'])->whereHas('map', function ($query) use ($map) {
            $query->where('name', 'like', '%' . $map . '%');
        })
            ->get();

        dd($zones);


        return response()->json($zones);
    }

    public function show(string $id)
    {
        $zone = Zone::with('pokemon', 'map')->findOrFail($id);

        return inertia('Guest/Map/show', ['zone' => $zone]);
    }
}
