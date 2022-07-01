<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Contracts\Validation\Rule;

class BooleanRule implements Rule
{
    public function passes($attribute, $value)
    {
        return toBoolean($value);
    }

    public function message()
    {
        return ':attribute is not a valid boolean value.';
    }
}
