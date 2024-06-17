<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttackCreateRequest;
use App\Http\Requests\AttackUpdateRequest;
use App\Models\Attack;
use App\Models\Category;
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
        $types = Type::all();
        $categories = Category::all();
        return inertia('Admin/Attack/create', ['types' => $types, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AttackCreateRequest $request)
    {
        $validatedData = $request->validated();

        $attack = Attack::make();
        $attack->name = $validatedData['name'];
        $attack->power = $validatedData['power'];
        $attack->accuracy = $validatedData['accuracy'];
        $attack->maxpp = $validatedData['maxpp'];
        $attack->description = $validatedData['description'];
        $attack->category_id = $validatedData['category'];
        $attack->type_id = $validatedData['type'];

        $attack->is_starting = 0;

        $attack->save();
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
        $attack = Attack::with(['category', 'type'])->findOrFail($id);
        $types = Type::all();
        $categories = Category::all();
        return inertia('Admin/Attack/edit', ['attack' => $attack, 'categories' => $categories, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AttackUpdateRequest $request, Attack $attack)
    {
        $validatedData = $request->validated();

        $attack->name = $validatedData['name'];
        $attack->power = $validatedData['power'];
        $attack->accuracy = $validatedData['accuracy'];
        $attack->maxpp = $validatedData['maxpp'];
        $attack->description = $validatedData['description'];
        $attack->category_id = $validatedData['category'];
        $attack->type_id = $validatedData['type'];

        $attack->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attack = Attack::findOrFail($id);
        $attack->delete();
    }
}
