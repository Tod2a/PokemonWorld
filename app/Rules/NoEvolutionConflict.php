<?php

namespace App\Rules;

use App\Models\Evolution;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoEvolutionConflict implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Evolution::where('evolution_id', $value)->exists()) {
            $fail('The pokemon got already a evolution');
            return;
        }
    }
}
