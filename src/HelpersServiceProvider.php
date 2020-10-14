<?php

namespace Nanuc\Helpers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helpers');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/helpers'),
        ]);
    }

    public function register()
    {

    }
}
