<?php

namespace Avidianity\LaravelExtras\Contracts;

use Throwable;

interface RenderableExceptionContract extends Throwable
{
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request);
}
