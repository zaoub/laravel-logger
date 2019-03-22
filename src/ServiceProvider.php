<?php

namespace Zaoub\Laravel\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Stevebauman\LogReader\LogReaderServiceProvider');

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('LogReader', 'Stevebauman\LogReader\Facades\LogReader');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/zaoub/zll'),
        ], 'public');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'ZLL');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}