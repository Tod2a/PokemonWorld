<?php

namespace App\Rules;

use App\Models\Evolution;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoPrevolutionConflict implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Evolution::where('prevolution_id', $value)->exists()) {
            $fail('The pokemon got already a prevolution');
            return;
        }
    }
}
