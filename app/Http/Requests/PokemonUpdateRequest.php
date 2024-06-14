<?php

namespace App\Http\Requests;

use App\Rules\UniqueResistance;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PokemonUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $pokemonId = $this->route('pokemon');

        return [
            'name' => [
                'required',
                'max:50',
                Rule::unique('pokemon')->ignore($pokemonId), // Ignore le Pokémon actuellement en édition
            ],
            'description' => 'required',
            'hp' => 'required|integer|min:1|max:150',
            'att' => 'required|integer|min:1|max:150',
            'def' => 'required|integer|min:1|max:150',
            'attspe' => 'required|integer|min:1|max:150',
            'defspe' => 'required|integer|min:1|max:150',
            'vit' => 'required|integer|min:1|max:150',
            'size' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'type1' => 'required|integer|min:1|max:18',
            'type2' => 'nullable|integer|min:1|max:18',
            'weaknesses' => 'array',
            'resistances' => ['array', new UniqueResistance],
        ];
    }
}
