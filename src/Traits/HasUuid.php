<?php

namespace Avidianity\LaravelExtras\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    protected static function bootHasUuid()
    {
        static::creating(function (self $model) {
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }
}
