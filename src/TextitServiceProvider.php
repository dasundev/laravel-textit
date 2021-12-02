<?php

namespace Dasundev\LaravelTextit;

use Illuminate\Support\ServiceProvider;

class TextitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('textit', function () {
            return new Textit();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/textit.php' => config_path('textit.php'),
        ], 'config');
    }
}
