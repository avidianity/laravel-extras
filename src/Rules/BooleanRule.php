<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Validation\Rule;
use Stringable;

class BooleanRule implements Stringable
{
    public function __toString(): string
    {
        return Rule::in(['true', 'false', '1', '0', 1, 0, true, false])->__toString();
    }
}
