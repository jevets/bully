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

        $this->views();
    }

    /**
     * Get an absolute path to this package
     *
     * @param string $path
     * @return string
     */
    private function path($path = null)
    {
        return __DIR__ . "/../{$path}";
    }

    /**
     * MErge config and offer publishable config file
     *
     * @return void
     */
    protected function config()
    {
        $this->publishes([
            $this->path('config/bully.php') => config_path('bully.php'),
        ], 'bully-config');

        $this->mergeConfigFrom($this->path('config/bully.php'), 'bully');
    }

    /**
     * Publish public assets
     *
     * @return void
     */
    protected function assets()
    {
        $this->publishes([
            $this->path('dist') => public_path('bully')
        ], 'bully-assets');
    }

    /**
     * Load and publish views
     *
     * @return void
     */
    protected function views()
    {
        $this->loadViewsFrom($this->path('resources/views'), 'bully');

        $this->publishes([
            $this->path('resources/views') => resource_path('views/vendor/bully')
        ], 'bully-views');
    }
}
