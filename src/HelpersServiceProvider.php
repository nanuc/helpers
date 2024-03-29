<?php

namespace Nanuc\Helpers;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Nanuc\Helpers\View\Components\Date;
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
            Date::class,
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
        $this->registerStringMacros();
    }

    protected function setLocale()
    {
        LocaleSetter::make()->setLocale(app()->getLocale());
    }

    protected function registerCollectionMacros()
    {
        Collection::macro('increment', function ($key, $incrementBy = 1) {
            $newValue = Arr::get($this, $key, 0) + $incrementBy;
            $data = $this->toArray();
            Arr::set($data, $key, $newValue);
            return collect($data);
        });

        Collection::macro('enumerate', function ($joinWord = null) {
            $joinWord = $joinWord ?? __('helpers::helpers.and');

            if(count($this) < 2) {
                return $this;
            }

            $lastElement = $this->pop();
            return $this->implode(', ') . ' ' . $joinWord . ' ' . $lastElement;
        });

        Collection::macro('toEloquentCollection', function () {
            return new \Illuminate\Database\Eloquent\Collection($this);
        });

        Collection::macro('explode', function($delimiter) {
            $counter = 0;
            $result = [];

            foreach($this->values() as $element) {
                if($element == $delimiter) {
                    $counter++;
                }
                else {
                    $result[$counter][] = $element;
                }
            }

            return collect($result);
        });

        Collection::macro('log', function () {
            info($this->toArray());
            return $this;
        });

        Arr::macro('remove', function($array, $value) {
            if (($key = array_search($value, $array)) !== false) {
                unset($array[$key]);
            }

            return $array;
        });
    }

    protected function registerStringMacros()
    {
        Str::macro('icontains', function($haystack, $needles) {
            foreach ((array) $needles as $needle) {
                if ($needle !== '' && mb_stripos($haystack, $needle) !== false) {
                    return true;
                }
            }

            return false;
        });
    }
}
