<?php

namespace App\Http\Requests;

use App\Rules\UniqueResistance;
use Illuminate\Foundation\Http\FormRequest;

class PokemonCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:pokemon|max:50',
            'description' => 'required',
            'hp' => 'required|min:1|max:150',
            'att' => 'required|min:1|max:150',
            'def' => 'required|min:1|max:150',
            'attspe' => 'required|min:1|max:150',
            'defspe' => 'required|min:1|max:150',
            'vit' => 'required|min:1|max:150',
            'size' => 'required|min:1',
            'weight' => 'required|min:1',
            'type1' => 'required|min:1|max:18',
            'type2' => 'nullable|min:1|max:18',
            'imgurl' => 'required|image|unique:pokemon',
            'weaknesses' => 'array',
            'resistances' => ['array', new UniqueResistance],
        ];
    }
}
