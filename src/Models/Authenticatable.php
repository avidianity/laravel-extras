<?php

namespace Avidianity\LaravelExtras\Models;

use Avidianity\LaravelExtras\Traits\HasUuid;
use Avidianity\LaravelExtras\Traits\IsJWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Avidianity\LaravelExtras\Traits\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

abstract class Authenticatable extends Model implements JWTSubject
{
    use Notifiable;
    use HasFactory;
    use HasUuid;
    use IsJWTSubject;

    protected $hidden = [
        'password',
    ];

    public $keyType = 'string';
    public $incrementing = false;
}
