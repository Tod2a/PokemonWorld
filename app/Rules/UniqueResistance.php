<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueResistance implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $weaknesses = request()->input('weaknesses', []);

        // Vérifier si la résistance est dans les faiblesses
        foreach ($value as $resistance) {
            if (in_array($resistance, $weaknesses)) {
                $fail('A resistance cannot be present in weaknesses.');
                return;
            }
        }
    }
}
