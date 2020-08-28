<?php

namespace Lubusin\Decomposer;

use Illuminate\Support\ServiceProvider;

class DecomposerServiceProvider extends ServiceProvider
{

    /**
     * Boot up the package. Load the views from the correct directory.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'decomposer');
        if ($this->app->runningInConsole()) {
            echo __DIR__.'/../config/decomposer.php';

            $this->publishes([
                __DIR__.'/../config/decomposer.php' => config_path('decomposer.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/decomposer.php',
            'decomposer'
        );
    }
}
