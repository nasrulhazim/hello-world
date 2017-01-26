<?php

namespace NasrulHazim\Hello\World;

use Illuminate\Support\ServiceProvider;
use NasrulHazim\Hello\World\Console\Commands\HelloWorldCommand;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                HelloWorldCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
