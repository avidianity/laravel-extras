<?php

namespace Avidianity\LaravelExtras\Traits;

trait Makeable
{
    public static function make(...$parameters)
    {
        return new static(...$parameters);
    }
}
