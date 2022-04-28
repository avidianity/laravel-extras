<?php

namespace Avidianity\LaravelExtras\Rules;

use Stringable;

class ColorRule implements Stringable
{
    public function __toString(): string
    {
        return 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/';
    }
}
