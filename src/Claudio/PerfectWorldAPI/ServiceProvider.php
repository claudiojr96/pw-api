<?php

namespace Claudio\PerfectWorldAPI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/pw-api.php' => config_path('pw-api.php'),
        ], 'pw-api-config');

        $this->publishes([
            __DIR__.'/../../lang' => base_path('resources/lang'),
        ]);
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }
}