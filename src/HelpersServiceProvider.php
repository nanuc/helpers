<?php

namespace Nanuc\Helpers;

use Nanuc\Helpers\View\Components\Tabs\TabContent;
use Nanuc\Helpers\View\Components\Tabs\TabLink;
use Nanuc\Helpers\View\Components\Tabs\Tabs;
use Illuminate\Support\ServiceProvider;
use Nanuc\Helpers\View\Components\DateTime;
use Nanuc\Helpers\View\Components\HelpscoutBeacon;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helpers');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/helpers'),
        ]);

        $this->publishes([
            __DIR__.'/../config/helpers.php' => config_path('helpers.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helpers');

        $this->loadViewComponentsAs('helpers', [
            DateTime::class,
            HelpscoutBeacon::class,
            'tabs.tabs' => Tabs::class,
            'tabs.tab-link' => TabLink::class,
            'tabs.tab-content' => TabContent::class,
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/helpers.php', 'helpers');
    }
}
