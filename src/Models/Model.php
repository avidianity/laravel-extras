<?php

namespace Avidianity\LaravelExtras;

use Avidianity\LaravelExtras\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    use HasFactory;
    use HasUuid;

    public $keyType = 'string';
    public $incrementing = false;
}
