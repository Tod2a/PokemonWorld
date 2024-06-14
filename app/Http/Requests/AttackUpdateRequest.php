<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AttackUpdateRequest extends FormRequest
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

        $attackId = $this->route('attack');

        return [
            'name' => [
                'required',
                'max:50',
                Rule::unique('attacks')->ignore($attackId),
            ],
            'power' => 'required|integer|min:0|max:200',
            'accuracy' => 'required|integer|min:10|max:100',
            'maxpp' => 'required|integer|min:5|max:40',
            'description' => 'required',
            'category' => 'required|exists:categories,id',
            'type' => 'required|exists:types,id',
            'is_starting' => 'required|boolean',
        ];
    }
}
