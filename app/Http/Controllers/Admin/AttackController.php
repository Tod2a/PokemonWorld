<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attack;
use App\Models\Type;
use Illuminate\Http\Request;

class AttackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return inertia('Admin/Attack/index', ['types' => $types]);
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
