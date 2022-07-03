<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Contracts\Validation\Rule;

class BooleanRule implements Rule
{
    public function passes($attribute, $value)
    {
        if (is_bool($value)) {
            return $value;
        }

        if (is_string($value) || is_numeric($value)) {
            return in_array($value, ['true', 'false', 1, 0, '1', '0']);
        }

        return false;
    }

    public function message()
    {
        return ':attribute is not a valid boolean value.';
    }
}
