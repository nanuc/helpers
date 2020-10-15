<?php

namespace Nanuc\Helpers;

use Illuminate\Support\ServiceProvider;
use Nanuc\Helpers\View\Components\DateTime;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helpers');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/helpers'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helpers');

        $this->loadViewComponentsAs('helpers', [
            DateTime::class,
        ]);
    }

    public function register()
    {

    }
}
