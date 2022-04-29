<?php

namespace Avidianity\LaravelExtras\Providers;

use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;

class LaravelExtrasUuidServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Builder::morphUsingUuids();
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
