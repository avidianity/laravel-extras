<?php

namespace Avidianity\LaravelExtras\Traits;

trait IsJWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'data' => $this->withoutRelations()->toArray()
        ];
    }
}
