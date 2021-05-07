<?php

namespace Nanuc\Helpers;

use Illuminate\Support\Collection;
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
        ], 'config');

        $this->publishes([
            __DIR__.'/../config/helpers.php' => config_path('helpers.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helpers');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewComponentsAs('helpers', [
            DateTime::class,
            HelpscoutBeacon::class,
            'tabs.tabs' => Tabs::class,
            'tabs.tab-link' => TabLink::class,
            'tabs.tab-content' => TabContent::class,
        ]);

        $this->setLocale();
    }

    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $this->mergeConfigFrom(__DIR__ . '/../config/helpers.php', 'helpers');
        $this->registerCollectionMacros();
    }

    protected function setLocale()
    {
        LocaleSetter::make()->setLocale(app()->getLocale());
    }

    protected function registerCollectionMacros()
    {
        Collection::macro('enumerate', function () {
            if(count($this) < 2) {
                return $this;
            }

            $lastElement = $this->pop();
            return $this->implode(', ') . ' ' . __('helpers::helpers.and') . ' ' . $lastElement;
        });

        Collection::macro('toEloquentCollection', function () {
            return new \Illuminate\Database\Eloquent\Collection($this);
        });
    }
}
