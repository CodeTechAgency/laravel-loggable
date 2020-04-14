<?php

namespace CodeTech\Loggable\Providers;

use Illuminate\Support\ServiceProvider;

class LoggableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load migrations from custom path
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
