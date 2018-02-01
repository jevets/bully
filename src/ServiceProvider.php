<?php

namespace Jevets\Bully;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/bully.php' => config_path('bully.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/bully.php',
            'bully'
        );

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bully');

        $this->publishAssets();
    }

    /**
     * Publish public assets
     *
     * @return void
     */
    protected function publishAssets()
    {
        //
    }
}
