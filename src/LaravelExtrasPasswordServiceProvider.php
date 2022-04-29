<?php

namespace Avidianity\LaravelExtras\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class LaravelExtrasPasswordServiceProvider extends ServiceProvider
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
        Password::defaults(function () {
            if ($this->app->runningUnitTests()) {
                return Password::min(4);
            }

            $rule = Password::min(8);

            return $this->app->isProduction()
                ? $rule->letters()->mixedCase()->numbers()->symbols()->uncompromised()
                : $rule;
        });
    }
}
