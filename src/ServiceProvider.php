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
        $this->config();

        $this->assets();

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bully');
    }

    /**
     * MErge config and offer publishable config file
     *
     * @return void
     */
    protected function config()
    {
        $this->publishes([
            __DIR__ . '/../config/bully.php' => config_path('bully.php'),
        ], 'bully-config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/bully.php',
            'bully'
        );
    }

    /**
     * Publish public assets
     *
     * @return void
     */
    protected function assets()
    {
        $this->publishes([
            __DIR__ . '/../dist' => public_path('bully')
        ], 'bully-assets');
    }
}
