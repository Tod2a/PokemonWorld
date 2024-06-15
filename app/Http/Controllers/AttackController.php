<?php

namespace App\Http\Controllers;

use App\Models\Attack;
use App\Models\Type;
use Illuminate\Http\Request;

class AttackController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return inertia('Guest/Attacks/index', ['types' => $types]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type');

        $attacks = Attack::with(['type', 'category']);

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
}
