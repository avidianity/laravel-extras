<?php

namespace Avidianity\LaravelExtras\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;

class LaravelExtrasServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Create fake data for the model
         *
         * @return array
         */
        Factory::macro('data', function () {
            /** @var Factory $this */
            return $this->make()->toArray();
        });

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'laravel-extras-migrations');
    }
}
