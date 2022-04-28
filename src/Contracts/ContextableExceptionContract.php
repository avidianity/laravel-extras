<?php

namespace Avidianity\LaravelExtras\Contracts;

use Throwable;

interface ContextableExceptionContract extends Throwable
{
    /**
     * Get the exception's context information.
     *
     * @return array
     */
    public function context();
}
