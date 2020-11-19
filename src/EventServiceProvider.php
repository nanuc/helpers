<?php

namespace Nanuc\Helpers;

use Illuminate\Foundation\Events\LocaleUpdated;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Nanuc\Helpers\Listeners\UpdateLocale;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        LocaleUpdated::class => [
            UpdateLocale::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
